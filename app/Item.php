<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class Item extends Model
{
    use Sluggable;

    const IS_NEW = 1;
    const IS_POPULAR = 2;
    /**
     * Массив с данными товара, которые будем сохранять в таблицу
     *
     * @var array
     */
    protected $fillable =['title', 'description', 'price', 'status', 'availability'];

    /**
     * Один товар может принадлежать только одной категории
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * У товара может быть только один бренд
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    /**
     * Добавление нового товара
     *
     * @param array $fields
     * @return static
     */
    public static function add(array $fields)
    {
        $item = new static;
        $item->fill($fields);
        $item->user_id = 1;
        $item->save();

        return $item;
    }

    /**
     * Изменение данных о товаре
     *
     * @param $fields
     */
    public function edit($fields)
    {
        $this->fill($fields);
        $this->save();
    }

    /**
     * Удаляем товар
     *
     */
    public function remove()
    {
        $this->removeImage();
        $this->delete();
    }

    /**
     * Загрузка картинки
     *
     * @param $image
     */
    public function uploadImage($image)
    {
        if (null == $image) {
            return;
        }

        $this->removeImage();

        $filename = str_random(10) . '.' . $image->extension();
        $image->storeAs('uploads/items', $filename);
        $this->image = $filename;
        $this->save();
    }

    public  function getImage()
    {
        if (null == $this->image) {
            return '/img/no-image.png';
        }
        return '/uploads/items/' . $this->image;
    }

    public function removeImage()
    {
        if (null != $this->image)
        {
// используя стандартный класс laravel Storage удаляем картинку,
// если она была раньше загружена
            Storage::delete('uploads/items/' . $this->image);
        }
    }

    public function setCategory($id)
    {
        if (null == $id) {
            return;
        }

        $this->category_id = $id;
        $this->save();
    }

    public function getCategoryTitle()
    {
        if (null != $this->category) {
            return $this->category->title;
        }

        return 'Нет категории';
    }

    public function getCategoryID()
    {
// делаем проверку на наличие категории у поста, если ее нет, то выводим  null
        return $this->category != null ? $this->category->id : null;
    }

    public function setBrand($id)
    {
        if (null == $id) {
            return;
        }

        $this->brand_id = $id;
        $this->save();
    }

    public function getBrandTitle()
    {
        if (null != $this->brand) {
            return $this->brand->title;
        }

        return 'Нет бренда';
    }

    public function getBrandID()
    {
        return $this->brand != null ? $this->brand->id : null;
    }

    public static function getPopularGoods()
    {
        return self::orderBy('views','desc')->take(3)->get();
    }

    public static function getTitle(int $id)
    {
        return DB::table('items')->where('id', '=', $id)->value('title');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;

class Good extends Model
{
    use Sluggable;

    const IS_NEW = 1;
    const IS_POPULAR = 2;
    /**
     * Массив с данными товара, которые будем сохранять в таблицу
     *
     * @var array
     */
    protected $fillable =['title', 'description', 'date'];

    /**
     * Один товар может принадлежать только одной категории
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
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
        $good = new static;
        $good->fill($fields);
        $good->user_id = 1;
        $good->save();

        return $good;
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
        $image->storeAs('uploads', $filename);
        $this->image = $filename;
        $this->save();
    }

    public  function getImage()
    {
        if (null == $this->image) {
            return '/img/no-image.png';
        }
        return '/uploads/' . $this->image;
    }

    public function removeImage()
    {
        if (null != $this->image)
        {
// используя стандартный класс laravel Storage удаляем картинку,
// если она была раньше загружена
            Storage::delete('uploads/' . $this->image);
        }
    }

    public function setCategory(int $id)
    {
        if (null == $id) {
            return;
        }

        $this->category_id = $id;
        $this->save();

    }

    public function setNew()
    {
        $this->status = Good::IS_NEW;
        $this->save();

    }

    public function setPopular()
    {
        $this->status = Good::IS_POPULAR;
        $this->save();
    }

    public function toggleStatus($value)
    {
        if (null == $value)
        {
            return $this->setNew();
        }
        else
        {
            return $this->setPopular();
        }
    }

    public function getCategoryTitle()
    {
        if (null != $this->category) {
            return $this->category->title;
        }

        return 'Нет категории';
    }

    public function setDateAttribute($value)
    {
// используем класс laravel Carbon для преобразования вида даты в такой,
// чтобы он сохранялся в базу данных mysql без ошибок
        $date = Carbon::createFromFormat('d/m/y', $value)->format('Y-m-d');
        $this->attributes['date'] = $date;
    }

    public function getDateAttribute($value)
    {
        $date = Carbon::createFromFormat('Y-m-d', $value)->format('d/m/y');

        return $date;
    }

    public function getCategoryID()
    {
// делаем проверку на наличие категории у поста, если ее нет, то выводим  null
        return $this->category != null ? $this->category->id : null;
    }

    public function getDate()
    {
// используем класс Carbon чтобы показывать дату, взятую из базы в одном формате, в нужном формате
        return Carbon::createFromFormat('d/m/y', $this->date)->format('F d, Y');
    }

// метод вывода категории у поста, если категории нет - ничего не выводим
    public function hasCategory()
    {
        return $this->category != null ? true : false;
    }

    public static function getPopularGoods()
    {
        return self::orderBy('views','desc')->take(3)->get();
    }

}

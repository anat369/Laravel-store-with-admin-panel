<?php

namespace App;

use Illuminate\Support\Facades\Storage;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use Sluggable;

    protected $fillable = ['title','description'];

    public function items()
    {
        return $this->hasMany(Item::class);
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
     * Добавляем бренд
     *
     * @param $fields
     * @return static
     */
    public static function add(array $fields)
    {
        $brand = new static;
        $brand->fill($fields);
        $brand->save();
        return $brand;
    }


    /**
     * Изменение данных о бренде
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
        $image->storeAs('uploads/brands', $filename);
        $this->image = $filename;
        $this->save();
    }

    public  function getImage()
    {
        if (null == $this->image) {
            return '/img/no-image.png';
        }
        return '/uploads/brands/' . $this->image;
    }

    public function removeImage()
    {
        if (null != $this->image)
        {
// используя стандартный класс laravel Storage удаляем картинку,
// если она была раньше загружена
            Storage::delete('uploads/brands/' . $this->image);
        }
    }
}

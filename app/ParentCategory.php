<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Support\Facades\DB;

class ParentCategory extends Model
{
    use Sluggable;

    protected $fillable = ['title'];

    public function items()
    {
        return $this->hasMany(Category::class);
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
     * Добавляем категорию
     *
     * @param $fields
     * @return static
     */
    public static function add(array $fields)
    {
        $category = new static;
        $category->fill($fields);
        $category->save();
        return $category;
    }
}


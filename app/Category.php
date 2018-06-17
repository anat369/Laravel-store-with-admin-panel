<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Support\Facades\DB;

class Category extends Model
{
    use Sluggable;

    protected $fillable = ['title','pid'];

    public function goods()
    {
        return $this->hasMany(Good::class);
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

    public static function getParentCategory()
    {
        $parentCategory = DB::table('categories')->where('pid', 0)->get(['id', 'title', 'slug']);

        return $parentCategory;
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


<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable =['item_id', 'user_id', 'title', 'message'];

    /**
     * У отзыва есть конкретный автор
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Отзыв есть у конкретного товара
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function item()
    {
        return $this->belongsTo(Item::class);
    }

    /**
     * Публикуем отзыв
     *
     */
    public function allow()
    {
        $this->status = 1;
        $this->save();
    }

    /**
     * Скрываем отзыв
     *
     */
    public function disallow()
    {
        $this->status = 0;
        $this->save();
    }

    /**
     * Изменяем статус отзыва
     *
     */
    public function toggleStatus()
    {
        if(0 == $this->status)
        {
            return $this->allow();
        }

        return $this->disAllow();
    }

    /**
     * Удаляем отзыв
     *
     * @throws \Exception
     */
    public function remove()
    {
        $this->delete();
    }
}

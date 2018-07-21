<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Order extends Model
{

    /**
     * Массив с данными заказа, которые будем сохранять в таблицу
     *
     * @var array
     */
    protected $fillable =['user_id', 'items', 'status', 'price'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * Добавление нового заказа
     *
     * @param array $fields
     * @return static
     */
    public static function add(array $fields)
    {
        $order = new static;
        $order->fill($fields);
        $order->save();

        return $order;
    }

    /**
     * Изменение данных о заказе
     *
     * @param $fields
     */
    public function edit($fields)
    {
        $this->fill($fields);
        $this->save();
    }

    /**
     * Удаляем заказ
     *
     */
    public function remove()
    {
        $this->delete();
    }

    public static function countNewOrders()
    {
        return DB::table('orders')->where('status', '=', 'Новый')->count();
    }
}

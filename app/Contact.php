<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Contact extends Model
{

    protected $table = 'mail_admin';

    /**
     * Массив с данными сообщений, которые будем сохранять в таблицу
     *
     * @var array
     */
    protected $fillable =['name', 'email', 'phone', 'description', 'status'];


    /**
     * Изменение данных сообщения
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

    public static function countNewEmail()
    {
        return DB::table('mail_admin')->where('status', '=', '0')->count();
    }
}

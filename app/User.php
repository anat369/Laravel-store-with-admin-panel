<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class User extends Authenticatable
{
    use Notifiable;

    const IS_ADMIN = 1;
    const IS_NORMAL = 0;

    const IS_BANNED = 1;
    const IS_ACTIVE = 0;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function items()
    {
        return $this->hasMany(Item::class);
    }

    /**
     * Добавляем пользователя
     *
     * @param $fields
     * @return static
     */
    public static function add(array $fields)
    {
        $user = new static;
        $user->fill($fields);
        $user->save();
        return $user;
    }

    public function edit(array $fields)
    {
        $this->fill($fields); //редактируем имя и почту

        $this->save();
    }

// при изменении поля пароля заново его шифруем
    public function generatePassword($password)
    {
        if(null != $password)
        {
            $this->password = bcrypt($password);
            $this->save();
        }
    }

    public function remove()
    {
        $this->removeAvatar();
        $this->delete();
    }

    /**
     * Загрузка аватарки для пользователя
     *
     * @param $image
     */
    public function uploadAvatar($image)
    {
        if(null == $image)
        {
            return;
        }

        $this->removeAvatar();
        $filename = str_random(10) . '.' . $image->extension();
// сохраняем аватарку
        $image->storeAs('uploads', $filename);
        $this->avatar = $filename;
        $this->save();
    }

    public function removeAvatar()
    {
// при удалении пользователя удаляем его аватарку, если она была
        if(null != $this->avatar)
        {
            Storage::delete('uploads/' . $this->avatar);
        }
    }

    public function getImage()
    {
        if(null == $this->avatar)
        {
            return '/img/no-image.png';
        }
        return '/uploads/' . $this->avatar;
    }
    public function makeAdmin()
    {
        $this->is_admin = User::IS_ADMIN;
    }

    public function makeNormal()
    {
        $this->is_admin = User::IS_NORMAL;
    }

    /**
     * Изменяем статус пользователя - админ или нет
     *
     * @param $value
     */
    public function toggleAdmin(int $value)
    {
        if ($value == null)
        {
            return $this->makeNormal();
        }
        else
        {
            return $this->makeAdmin();
        }
    }


    /**
     * Баним пользователя
     *
     */
    public function ban()
    {
        $this->status = User::IS_BANNED;
        $this->save();
    }

    public function unban()
    {
        $this->status = User::IS_ACTIVE;
        $this->save();
    }

    /**
     * Изменяем статус пользователя - забанен или нет
     *
     * @param $value
     */
    public function toggleBan(int $value)
    {
        if ($value == null)
        {
            return $this->ban();
        }
        else
        {
            return $this->unban();
        }
    }

    public static function getName(int $id)
    {
        return DB::table('users')->where('id', '=', $id)->value('name');
    }
}
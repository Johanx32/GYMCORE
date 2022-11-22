<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use Laravel\Sanctum\HasApiTokens;


class User extends Authenticatable
{
    use HasFactory, Notifiable, SoftDeletes;
    protected $table = 'users';

    protected $fillable = [
     'name',
     'email',
     'id_Role_FK',
     'password',    
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public const Role = ['','Gerente','Cliente','Entrenador'];

    public function id_Role_FK(){
        return self::Role[$this->id_Role_FK];
    }

    public function setPasswordAttribute($password){
        $this->attributes['password'] = bcrypt($password);
    }

}

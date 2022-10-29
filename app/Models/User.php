<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $guarded = ['id'];
    // protected $table = 'users';
    // protected $primaryKey  = 'id';

    // protected $fillable = [
    //     'role',
    //     'name',
    //     'nim',
    //     'email',
    //     'mobile_number',
    //     'gender',
    //     'ktm',
    //     'picture',
    //     'status',
    //     'password'
    // ];
}

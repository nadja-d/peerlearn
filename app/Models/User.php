<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'user';

    protected $primaryKey = 'userID';

    protected $fillable = [
        'username',
        'fullName',
        'email',
        'password',
        'major',
        'year',
        'profilePicture',
    ];



    public $timestamps = false; // Disable timestamps if not needed
}

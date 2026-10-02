<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    //
    use HasFactory, Notifiable;
    protected $table="users";
    protected $fillable = [
        'name',
        'email',
        'pass',
        'password',
        'slot',
        'supplier_name',
        'type',
        'location',
        'price',
        'image',
        'status',
        'created_at',
        'updated_at'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    //
    protected $table="supplier";
    protected $fillable = [
        'name',
        'email',
        'email_verified_at',
        'pass',
        'password',
        'remember_token',
        'current_team_id',
        'profile_photo_path',        
        'created_at',
        'updated_at'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    // The table associated with the model.
    protected $table = 'client';

    // The primary key for the model.
    protected $primaryKey = 'id';

    // Indicates if the model should be timestamped.
    public $timestamps = true;

    // The attributes that are mass assignable.
    protected $fillable = [
        'category','firstname','lastname','company_name','address', 'email', 'phone_number',
    ];

    // The attributes that should be hidden for arrays.
    protected $hidden = [
        'password',
    ];

    // Additional methods, relationships, or customization can be added here.
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Marketing extends Model
{
    // The table associated with the model.
    protected $table = 'marketing';

    // The primary key for the model.
    protected $primaryKey = 'id';

    // Indicates if the model should be timestamped.
    public $timestamps = true;

    // The attributes that are mass assignable.
    protected $fillable = [
        'custom_id',
        'customer_name',
        'sales_person',
        'reference',
        'project_category',
        'project_description',
        'lead_date',
        'engage_date',
    ];

    // The attributes that should be hidden for arrays.
    protected $hidden = [
        'password',
    ];

    // Additional methods, relationships, or customization can be added here.
}
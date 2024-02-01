<?php



namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MarketingRecord extends Model
{
    use HasFactory;

    // Define the table associated with the model
    protected $table = 'marketing';

    // Define the fillable fields
    protected $fillable = [
        'custom_id',
        'customer_name',
        'sales_person',
        'project_category',
        'project_description',
        'reference',
        'lead_date',
        'engage_date',
    ];

    // Additional model logic or relationships can be added here
}

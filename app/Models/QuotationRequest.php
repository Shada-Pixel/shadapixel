<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuotationRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'full_name', 'email', 'phone', 'company_name', 'website_url', 'project_name', 'service_type',
        'service_type_other', 'project_description', 'primary_goal', 'primary_goal_other', 'target_audience',
        'features', 'tech_stack', 'hosting_status', 'design_style', 'brand_assets', 'budget', 'timeline',
        'competitors', 'additional_info',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;


    protected $fillable = [
        'name',
        'slug',
        'keywords',
        'tools',
        'client',
        'category_id',
        'start_date',
        'delivery_date',
        'description',
        'link',
        'cover_home',
        'cover_work',
        'cover_details',
        'status'
    ];

    protected $casts = [
        'start_date ' => 'date:d-m, Y',
        'delivery_date ' => 'date:d-m, Y',
    ];




    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }


    public function members()
    {
        return $this->belongsToMany(Member::class, ProjectMember::class);
    }
}
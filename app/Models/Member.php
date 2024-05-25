<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;


    protected $fillable = ['name','slug','designation','photo','soocial_medias','email','website','skills','type','executive'];



    protected $casts = [
        'soocial_medias' => 'array',
        'skills' => 'array'
    ];

    // Projects of this member
    public function projects()
    {
        return $this->belongsToMany(Project::class, 'project_members', 'member_id', 'project_id');
    }


}

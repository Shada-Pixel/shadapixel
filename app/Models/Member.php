<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;


    protected $fillable = ['name','slug','designation','photo','soocial_medias','email','website','skills','type','executive'];


}

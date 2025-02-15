<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tasks extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'descriptions',
        'priority'
    ];

     public function User(){

       return $this->hasMany(User::class,'user_id');
     }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    use HasFactory;

    protected $table = 'courses';

    protected $fillable = ['Name', 'Category', 'Desc', 'Action',];

    public function course(){
        return $this->belongsTo(Courses::class);
    }
}

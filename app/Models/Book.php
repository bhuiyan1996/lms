<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function getCategory()
    {
        return $this->belongsTo(Category::class, 'category', 'id');
    }

    // public function getTotal()
    // {
    //     return $this->hasMany(Borrow::class, 'total','book');

    // }
}

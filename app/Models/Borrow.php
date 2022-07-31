<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Borrow extends Model
{
    use HasFactory;
    protected $guarded =[];

    public function getBook()
    {
        return $this->belongsTo(Book::class, 'book', 'id');
    }

    public function getreader()
    {
        return $this->belongsTo(Reader::class, 'name', 'id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'books';
    protected $fillable = [
        'name',
        'pageNumber',
        'is_lended',
        'barkod_no',
        'lend_time'
    ];


    public function getCategory()
    {

        $this->belongsTo(Category::class, 'category_id', 'id');
    }
}

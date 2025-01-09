<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Author extends Model
{
    use HasFactory,SoftDeletes;
    
    protected $table='authors';
    protected $fillable=[
    'name',
    'surname'
    ];

    public function getBooks(){
        $this->hasMany(Book::class,'author_id');
    }
}

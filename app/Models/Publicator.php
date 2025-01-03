<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publicator extends Model
{
    use HasFactory;
    protected $table='publicator';
    protected $fillable=[
        'name',
        'surname',
        'address',
        'mail'
    ];

    public function getBooks(){
        $this->hasMany(Book::class,'pub_id');
    }
}

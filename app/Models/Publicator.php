<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Publicator extends Model
{
    use HasFactory,SoftDeletes;
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

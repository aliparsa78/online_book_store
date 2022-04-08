<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    use HasFactory;
    protected $table = "books";
    public function catagory(){
        return $this->belongsTo(Catagory::class,'catagory_id','id');
    }
}

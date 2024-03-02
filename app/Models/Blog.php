<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $table = 'blogs';

    public function category(){
        // hasone relationship

        // belong to relationship
        // biz burada belong to relationship kullanacağız
        return $this->belongsTo(Category::class);
    }
}

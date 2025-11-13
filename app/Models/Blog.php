<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = ['category_id', 'title', 'slug', 'content'];

    // Object Relation Mapping, yang di perlu diketahui many to one, one yo many dll
    // belongsTo (banyak ke satu)

    public function category() {
        return $this->belongsTo(Categories::class, 'category_id', 'id');
    }
}

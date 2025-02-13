<?php

namespace App\Models;

use App\Models\tag;
use Illuminate\Database\Eloquent\Model;


class Aitool extends Model
{

    protected $fillable = ['name', 'description', 'category_id', 'link', 'hasFreePlan', 'price'];


    public function category() {
        return $this->belongsTo(Category::class);
    }
    public function tags() {
        return $this->belongsToMany(tag::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class tag extends Model
{

    public $timestamps = false;
    public function aitool() {
        return $this->belongsToMany(Aitool::class);
    }
}

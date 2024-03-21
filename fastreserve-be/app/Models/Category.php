<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    public function salles()
    {
        return $this->hasOne(Salle::class,'id_category','id');
    }
}

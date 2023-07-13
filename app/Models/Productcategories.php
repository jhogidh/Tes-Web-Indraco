<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productcategories extends Model
{
    use HasFactory;

    public function product(){
        return $this->hasMany( Product::class , 'id_category', 'id');
    }

    public function where($id){
        return $this->hasMany( Product::class , 'id_category', $id);
    }
}

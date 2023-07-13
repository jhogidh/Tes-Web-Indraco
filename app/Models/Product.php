<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['product_name', 'id_category', 'stock', 'price'];
    use HasFactory;

    public function category(){
        return $this->belongsTo( Productcategories::class, 'id_category', 'id');
    }

    public function category_name(){
        $cat = Productcategories::select('category_name')->get();
        return $cat->where('id_category', 'id');
    }
}

<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $table    = 'products';
    public $fillable = ['id_category', 'name', 'description', 'price', 'image'];
    public $timestamps = false;

    public static function get()
    {
        return Product::all();
    }

    public static function getProduct($id)
    {
        return Product::where('products.id', '=', $id)->get();
    }

    public static function getForCategory($idCategory)
    {
        return Product::where('products.id_category', '=', $idCategory)->get();
    }

    public static function saveProduct($product)
    {
        return Product::create($product);
    }
}

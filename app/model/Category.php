<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $table    = "categories";
    public $fillable =  ['id', 'name', 'icon'];
    public $timestamps = false;

    public static function get()
    {
        return Category::all();
    }

    public static function getCategory($id)
    {
        return Category::where('categories.id', '=', $id)
            ->get();
    }

    public static function saveCategory($category)
    {
        return Category::create($category);
    }
}

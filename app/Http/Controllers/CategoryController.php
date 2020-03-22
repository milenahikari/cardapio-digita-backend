<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Category;
use Validator;

class CategoryController extends Controller
{
    public function getCategories()
    {
        return Category::get();
    }

    public function findCategory($idCategory)
    {
        return Category::getCategory($idCategory);
    }

    public function postCategory(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'icon' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 401);
        }

        Category::saveCategory($request->all());
        return response()->json(['success' => 'Categoria cadastrada com sucesso!'], 200);
    }
}

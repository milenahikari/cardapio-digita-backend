<?php

namespace App\Http\Controllers;

use App\model\Product;
use Illuminate\Http\Request;
use Validator;

class ProductController extends Controller
{
    public function getProducts()
    {
        return Product::get();
    }

    public function findProduct($idProduct)
    {
        return Product::getProduct($idProduct);
    }

    public function getProductsForCategory($idCategory)
    {
        return Product::getForCategory($idCategory);
    }

    public function postProduct(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id_category' => 'required',
            'name'        => 'required',
            'description' => 'required',
            'price'       => 'required',
            'image'       => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 401);
        }

        Product::saveProduct($request->all());
        return response()->json(['success' => 'Produto cadastrado com sucesso!'], 200);
    }
}

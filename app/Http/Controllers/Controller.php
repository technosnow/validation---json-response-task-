<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Models\Product;

abstract class Controller
{
    public function successCreate(){
        return response()->json([
            'message'=>"created product"
        ],201);
    }
    public function returnProducts($data = []){
        return response()->json([
            'message'=>"Return all products",
            'data'=> $data
        ]);
    }
    public function returnProduct($data = []){
        return response()->json([
            'message'=>"Return product",
            'data'=> $data
        ]);
    }
    public function destroyprodect(){
        return response()->json([
            'message'=>"deleted"
        ]);
    }
    public function updateprodect($id,$product){
        
        if(!$product)
            return response()->json([
                'message'=>"product doesn't exist"
            ],404);
        return response()->json([
            'message'=>"updeted product"
        ]);

    }

}


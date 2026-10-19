<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function store(StoreProductRequest $request){

        Product::query()->create($request->validated());
        return $this->successCreate();
    }

    public function index(){

        $products=Product::query()->get();
        return $this->returnProducts(data : $products);
    }

    public function show($id){
        $product=Product::query()->where('id',$id)->first();
        return $this->returnProduct(data : $product);
    }

    public function update($id,UpdateProductRequest $request){

        $product=Product::query()->find($id)->update($request->validated());
        return $this->updateprodect($id,$product);
    }

    public function destroy($id){
        Product::query()->where('id',$id)->delete();
        return $this->destroyprodect();
    }
}

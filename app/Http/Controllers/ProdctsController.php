<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Categories;
use  App\Models\products;

class ProdctsController extends Controller
{
   public function index()
   {
     $categories=Categories::All();
     $products=products::All();

     return view('products.index',['categories'=>$categories,'products'=>$products]);
   }

   public function Create(Request $request) 
   {
  
    $validated = $request->validate([
      'name'=>'required|string',
      'description'=>'nullable|string|max:1000',
      'price'=>'required',
      'stocke'=>'required',
      'categories_id'=>'required',
      'image'=>'nullable',
   ]);
  $arr=[
     'name'=>$request->name,
     'description'=>$request->description,
     'price'=>$request->price,
     'stocke'=>$request->stocke,
     'categories_id'=>$request->categories_id,
     'image'=>$request->image,
  ];
  $items=products::Create($arr); // Insert
      $items->save();
      return redirect()->route('products.index');
   }

  
}

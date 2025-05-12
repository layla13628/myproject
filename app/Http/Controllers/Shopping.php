<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\products;
use Illuminate\Support\Facades\DB;

class Shopping extends Controller
{

    public function List($categories_id)
    {
        $data=DB::table('products')
        ->where('categories_id','=',$categories_id)
        ->get();


        return view('shopping.list',['products'=>$data]);
    }
     public function GetCategories()
     {
       $x=100;
       session()->put('vbn,$x');
        $data=DB::table('categories')
        ->get();

          return view('shopping.welcome',['categories'=>$data]);
     }
     public function Pay(Request $request)
     {
           $costumers=[
        'name'=>$request->name,
         'phone'=>$request->phone,
           ];
        
           DB::table('costumers')->insert($costumers);
$cart=[
'id_products'=>session()->get('product_id',1),
'id_costumers'=>$request->phone,
  ];

  DB::table('cart')->insert($cart);
return view('shopping.invoice');
     }

public function checkout()
{
     return view('shopping.checkout');

}
 public function Add_to_cart()
 {
    $count=session()->get('count',0);
    $count++;
    session()->put('count',$count);
    session()->put('product_id');
    return redirect()->back();
 }
    public function Details($id)
    {
        $data=DB::table('products')
        ->where('id','=',$id)
        ->first();

      
        return view('shopping.details',['product'=>$data]);
    }
}

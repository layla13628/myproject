<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;
class CategoriesController extends Controller
{
   public function index()
   {
      $get_items=Categories::All(); 
    return view('categories.index',['categories'=>$get_items]);
   }


   public function Create(Request $request)
   {
      $validated=$request->validate([
         'categ_name'=>'required|string',
         'categ_descreption'=>'nullable|string|max:1000',
      ]);
      $arr=[
         'name'=>$request->categ_name,
         'description'=>$request->categ_descreption
      ];
      $items=Categories::Create($arr); // Insert
      $items->save();

        return redirect()->route('categories.index');
   }

   public function Delete($id)
   {
      $data=Categories::find($id); // search
      if($data)
      {
         $data->delete();
      }

      return redirect()->route('categories.index');
   }

   public function edit($id) 
   {
      $data=Categories::find($id);
      return view('categories.edit',['categories'=>$data]);
   }

   public function update(Request $request) 
   {
      $data=Categories::find($request->id);
      $data->Update([
      'name'=>$request->categ_name,
         'description'=>$request->categ_description
      ]);

      return redirect()->route('categories.index');
   }
}

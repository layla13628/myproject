@extends('layouts.app')
@section('content')
  
 
 <!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>أدوات التجميل</title>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;700&display=swap" rel="stylesheet">
    <style>
       
        header {
            background: linear-gradient(to right,rgb(54, 164, 172),rgb(129, 213, 216));
            color: white;
            padding: 10px 10px;
            text-align: center;
            box-shadow: 0 2px 10px rgba(248, 240, 240, 0.1);
        }
       
        
    </style>
</head>
<body>

    <header>  
        <h1>عالم الجمال</h1>
        <p>كل ما تحتاجينه من أدوات التجميل في مكان واحد</p>
    </header>

    
  

    <div class="row">
      <div class="col d-flex justify-content-center mb-4">
        <div class="row">
          @foreach($categories as $item)
          <div class="col-sm-7 col-md-11 col-7 d-flex justify-content-center mb-4  ">
            <a href="{{route('shopping.list',['categories_id'=>$item->id])}}">
                <h3 class="">{{$item->name}}</h3>
              </div>
             <div class="card-body">
                 <div class="row">
                  <div class="col d-flex justify-content-center align-items-center ">
              <div class="card" style="width: 100px;background-color: rgb(61, 179, 163);">
                    <small class="text-white">{{$item->description}}</small>
                  </div>
                  <div class="col">
                    <i class="bi bi-person-standing-dress " style="font-size:250px;color:rgb(31, 145, 160);"></i>
                  </div>
</div>
            </div>
        </div>
           </a>
        </div>
           @endforeach
           </div>
      </div>
    </div>
 </div>
@endsection 
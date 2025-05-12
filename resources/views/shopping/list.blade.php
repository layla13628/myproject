@extends('layouts.app')
@section('content')

 
<div class="container">
    <div class="row mt-5">
      <div class="col">
         <h1 style="color:rgb(24, 143, 127)" > مرحبآ بكم في متجرنا</h1>
         <small>نوفر لك كل ماتحتاجه في عالم الجمال</small>

      </div>
    </div>

    <div class="row mt-5">
       <div class="col ">
         @foreach($products as $item)
          <div class="row mt-5">
            <div class="col d-flex justify-content-center">
             <div class="card" style="width: 700px;">
                <div class="card-header" style="background-color: rgb(20, 145, 128);">
                 <span class="text-white">{{$item->name}}</span>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col">
                          <ul class="list-unstyled">
                            <li><h3><span class="badge bg-dark">{{$item->name}}</span></h3></li>
                            <li>{{$item->description}}</li>
                            <li><span class="badge bg-dark"> {{$item->price}}</span></li>
                          </ul>
                        </div>
                        <div class="col d-flex justify-content-center">
                         <img src="{{$item->image}}" width="100" hoeght="100">
                        </div>
                    </div>

                    <div class="row mt-3">
                      <div class="col">
                        <a href="{{route('shopping.details',['id'=>$item->id])}}" class="btn btn-success" >اختر هذا المنتج </a>
                      </div>
                    </div>
                </div>
             </div>
            </div>
          </div>
         @endforeach
       </div>
    </div>
</div>

@endsection


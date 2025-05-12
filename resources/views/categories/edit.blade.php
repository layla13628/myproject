@extends('layouts.admin')
@section('content')
   <div class="container">
      <div class="row mt-5">
         <div class="col d-flex justify-content-center">
            <div class="card">
                <div class="card-header" style="background-color: rgb(20, 136, 145);">
                   <h3 class="text-white">تحرير فئة </h3>
                </div>
                <div class="card-body">

                 <form action="{{route('categories.Update')}}" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{$categoreis->id}}">
                    <div class="row">
                        <div class="col">
                          <label class="form-label">اسم الفئة</label>
                          <input type="text" class="form-control" name="categ_name" value="{{$categoreis->name}}"  >
                          
                        </div>
                        <div class="col">
                            <label class="form-label">وصف الفئة</label>
                            <input type="text" class="form-control" name="categ_description" value="{{$categoreis->description}}" >
                           
                        </div>
                        </div>
                        <div class="col">
                            <label class="form-label"> أيقونة</label>
                            <input type="text" class="form-control" name="icon" value="{{$categoreis->icon}}" >
                           
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <button type="submit" class="btn btn-primary">حفظ</button>
                        </div>
                    </div>
                 </form>
                </div>
            </div>
         </div>
      </div>

     
   </div>
@endsection
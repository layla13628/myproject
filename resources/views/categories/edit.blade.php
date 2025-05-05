@extends('layouts.admin')
@section('content')
<div class="containar">
    <div class="row mt-5">
        <div class="col d-flex justify-content-center">
            <div class="card">
                <div class="card-header" style="background-color:rgb(24, 84, 153);">
                     <h3 class="text-white">تحرير فئة</h3>
                </div>
                <div class="card-body">
<form action="{{route('categories.Update')}}" method="POST">
    @csrf
    <input type="hidden" name="id"  value="{{'$categories->id'}}">

    <div class="row">
        <div class="col">
<label class="form-label">اسم الفئة</label>
<input type ="text"class="form-control" name="categ_name" value="{{'$categories->name'}}">

</div>
<div class="col">
<label class="form-label">وصف الفئة</label>
<input type ="text"class="form-control" name="categ_descreption" value="{{'$categories->description'}}">

        </div>
    </div>

    <div class="row">
        <div class="col">
            <button type="submit"class="btn btn-primary">حفظ</button>
        </div>
    </div>
</form>
</div>
</div>
</div>
</div>


    </div>
@endsection
@extends('layouts.master')
@section('title', '上傳相片')

@section('content')
<div class="op-container">
    <div class="row justify-content-left">
        <div class="col-md-8">
            <h2>上傳個人相片</h2>
            <a href="{{ route('photos') }}" class="btn btn-secondary">返回</a>
        </div>
    </div>
</div>
<div class="container-fluid photos">
    <div class="row align-items-stretch">
        
        <form method="POST" action="{{ route('photos.store') }}" enctype="multipart/form-data">

            @csrf
            請選取要上傳的檔案:<br />
            <input type="file" name="files[]" /><br />
            <input type="submit" value="送出資料" />
        </form>

    </div>
</div>
@endsection
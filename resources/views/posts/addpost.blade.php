@extends('layouts.master')
@section('title', '新增文章')

@section('content')
<div class="op-container">
    <div class="row justify-content-left">
        <div class="col-md-8">
            <h2>新增文章</h2>
            <a href="{{ route('post') }}" class="btn btn-secondary">返回</a>
        </div>
    </div>
</div>
<div class="posts-container">
    <div class="row row-space-20">
        <div class="col-12">
            <form method="post" action="{{ route('post.store') }}">
                        
                @csrf

                <div class="form-group">
                    <label for="title">文章標題</label><br />
                    <input type="text" name="title" id="title" class="form-control"></input>
                </div>
                <div class="form-group">
                    <label for="content">文章內容</label><br />
                    <textarea type="text" name="content" id="content" class="form-control"></textarea>
                </div>
                <button type="submit" class="btn btn-success">儲存</button>

            </form>
        </div>
    </div>
</div>                    
@endsection
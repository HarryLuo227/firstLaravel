@extends('layouts.master')
@section('title', '文章首頁')

@section('content')
<div class="op-container">
    <div class="row justify-content-left">
        <div class="col-md-8">
            <h2>{{ $post->title }}</h2>
            <a href="{{ route('post') }}" class="btn btn-secondary">返回</a>
            <a href="{{ route('post.edit', $post->id) }}" class="btn btn-success">編輯</a>
            <a href="#" class="btn btn-danger" onclick="document.getElementById('delete').submit()">刪除</a>
            <form method="post" action="{{ route('post.delete', $post->id) }}" id="delete">
                @csrf
                {{ method_field('DELETE') }}
            </form>
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                </div>
                <div class="card-body">
                    {{ $post->content }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
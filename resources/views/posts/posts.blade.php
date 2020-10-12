@extends('layouts.master')
@section('title', '文章首頁')

@section('content')
<div class="op-container">
    <div class="row justify-content-left">
        <div class="col-md-8">
            <h2>文章總覽</h2>
            <a href="{{ route('post.create') }}" class="btn btn-primary">新增</a> 
        </div>
        <div class="col-md-8">
            <table class="table table-hover">
                <thead>
                    <th>文章標題</th>
                    <th>發表人</th>
                </thead>
                <tbody>
                    @foreach($posts as $post)
                        <tr>
                            <td><a href="{{ route('post.show', $post->id) }}">{{ $post->title }}</a></td>
                            <td>{{ $post->user_id }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
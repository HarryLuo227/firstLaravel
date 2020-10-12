@extends('layouts.master')
@section('title', '名片編輯')

@section('content')
<div class="op-container">
    <div class="row justify-content-left">
        <div class="col-md-8">
            <h2>編輯個人名片</h2>
            <a href="{{ route('home') }}" class="btn btn-secondary">返回</a>
        </div>
    </div>
</div>
<div class="profile-container">
    <div class="row row-space-20">
        <div class="col-md-8">
            <form method="post" action="{{ route('home.update', $profile->user_id) }}">
                        
                @csrf

                <table>
                </table>
                <div class="form-group">
                    <label for="sex">性別</label><br />
                    <input type="text" name="sex" id="sex" value="{{ $profile->sex }}"></input>
                </div>
                <div class="form-group">
                    <label for="county">居住地</label><br />
                    <input type="text" name="county" id="county" value="{{ $profile->county }}"></input>
                </div>
                <div class="form-group">
                    <label for="website">個人網站</label><br />
                    <input type="website" name="website" id="website" value="{{ $profile->website }}"></input>
                </div>
                <div class="form-group">
                    <label for="phone">行動電話</label><br />
                    <input type="text" name="phone" id="phone" value="{{ $profile->phone }}"></input>
                </div>
                <div class="form-group">
                    <label for="email">Email</label><br />
                    <input type="text" name="email" id="email" value="{{ $profile->email }}"></input>
                </div>
                <button type="submit" class="btn btn-success">儲存</button>

            </form>
        </div>
    </div>
</div>                    
@endsection
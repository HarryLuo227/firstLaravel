@extends('layouts.master')
@section('title', '我的首頁')

@section('content')
<div class="op-container">
    <div class="row justify-content-left">
        <div class="col-md-8">
            <a href="{{ route('home.edit', $profile->user_id) }}" class="btn btn-success">編輯</a>
        </div>
    </div>
</div>
<div class="profile-container">
    <div class="row row-space-20">
        <div class="col-md-8">
            <div class="tab-content p-0">
                <div class="tab-pane active show" id="profile-about">
                    <!-- 基本資料 -->
                    <table class="table table-profile">
                        <thead>
                            <tr>
                                <th colspan="2">基本資料</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="field">生日</td>
                                <td>
                                    {{ $profile->birthday }}
                                </td>
                            </tr>
                            <tr>
                                <td class="field">性別</td>
                                <td>
                                    {{ $profile->sex }}
                                </td>
                            </tr>
                            <tr>
                                <td class="field">出生地</td>
                                <td>
                                    {{ $profile->county }}
                                </td>
                            </tr>
                            <tr>
                                <td class="field">個人網站</td>
                                <td class=>
                                    {{ $profile->website }}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <!-- 聯絡資料 -->
                    <table class="table table-profile">
                        <thead>
                            <tr>
                                <th colspan="2">聯絡資料</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="field">行動電話</td>
                                <td>
                                    {{ $profile->phone }}
                                </td>
                            </tr>
                            <tr>
                                <td class="field">Email</td>
                                <td>
                                    {{ $profile->email }}
                                </td>
                            </tr>   
                        </tbody>
                    </table>

                </div>
            </div>
        </div>

        <div class="col-md-4 hidden-xs hidden-sm">
            <ul class="profile-info-list">
                <li class="title">PERSONAL INFORMATION</li>
                <li>
                    <div class="field">Birth of Date:</div>
                    <div class="value">{{ $profile->birthday }}</div>
                </li>
                <li>
                    <div class="field">Country:</div>
                    <div class="value">{{ $profile->county }}</div>
                </li>
                <li>
                    <div class="field">Phone No.:</div>
                    <div class="value">
                        {{ $profile->phone }}
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
@endsection

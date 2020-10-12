@extends('layouts.master')
@section('title', '首頁')

@section('content')
<!-- Jumbotron Header -->
<header class="jumbotron my-4" style="background-color: hsla(147, 50%, 47%, 0.3);">
  <h1 class="display-3">歡迎!</h1>
  <p class="lead">想要有個人網站嗎?此網站能滿足您的願望!不論是分享自己的作品、日記、文章、甚至是建立個人線上名片，這裡都能做到，快點來加入吧!</p>
  <a href="#" class="btn btn-primary btn-lg">Get started!</a>
</header>

<!-- Page Features -->
<div class="row text-center">
    
    <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
            <img class="card-img-top" src="{{ asset('img/yourself.jpg') }}" alt="個人資料">
            <div class="card-body">
                <h4 class="card-title">Yourself</h4>
                <p class="card-text">
                提供個人名片，包含基本的姓名、生日、出生地、興趣...，此外您還可以發佈文章，例如生活隨筆、學習筆記、個人文章...等。
                </p>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
            <img class="card-img-top" src="{{ asset('img/flexibility.jpg') }}" alt="自由度">
            <div class="card-body">
                <h4 class="card-title">High flexibility</h4>
                <p class="card-text">具備高自由度規劃個人的網站，用來紀錄自己的生活、或是社交都不是問題!</p>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
            <img class="card-img-top" src="{{ asset('img/portfolio.jpg') }}" alt="作品集">
            <div class="card-body">
                <h4 class="card-title">Portfolio</h4>
                <p class="card-text">可以上傳您個人的作品集、無論是相片、影片、音樂或是檔案...等等。</p>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
            <img class="card-img-top" src="{{ asset('img/futuristic.jpg') }}" alt="未來發展">
            <div class="card-body">
                <h4 class="card-title">Futuristic</h4>
                <p class="card-text">未來會陸續開發更多功能，敬請期待!</p>
            </div>
        </div>
    </div>

</div>

@endsection
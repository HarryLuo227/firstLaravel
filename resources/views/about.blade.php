@extends('layouts.master')
@section('title', '關於')

@section('css')
<link href="{{ asset('css/about.css') }}" rel="stylesheet">

@endsection

@section('content')
<!-- Image Showcases -->
<section class="showcase">
    <div class="container-fluid p-0">
        <div class="row no-gutters">

            <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('img/img_about/aboutSelf.jpg');"></div>
            <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                <h2>個人名片</h2>
                <p class="lead mb-0">
                在個人名片，你可以輸入包含基本的姓名、生日、出生地、興趣...。
                </p>
            </div>
        </div>
        <div class="row no-gutters">
            <div class="col-lg-6 text-white showcase-img" style="background-image: url('img/img_about/aboutPost.jpg');"></div>
            <div class="col-lg-6 my-auto showcase-text">
                <h2>發佈文章</h2>
                <p class="lead mb-0">
                您能發佈個人文章，不論是個人的日記、旅遊或美食紀錄、生活隨筆、學習筆記，甚至是個人技術文章。
                </p>
            </div>
        </div>
        <div class="row no-gutters">
            <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('img/img_about/aboutPortfolio.jpg');"></div>
            <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                <h2>作品集</h2>
                <p class="lead mb-0">
                您可以上傳並設定是否公開分享個人的檔案、作品集，像是日常攝影相片、個人Vlog影片、甚至個人創作的作品檔案。
                </p>
            </div>
        </div>
    </div>
</section>

@endsection
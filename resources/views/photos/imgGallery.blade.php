@extends('layouts.master')
@section('title', '相簿')

@section('css')
<link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700,900" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('fonts/style.css') }}">

<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/photos/magnific-popup.css') }}">
<link rel="stylesheet" href="{{ asset('css/photos/jquery-ui.css') }}">
<link rel="stylesheet" href="{{ asset('css/photos/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/photos/owl.theme.default.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/photos/bootstrap-datepicker.css') }}">
<link rel="stylesheet" href="{{ asset('fonts/flaticon.css') }}">
<link rel="stylesheet" href="{{ asset('css/photos/aos.css') }}">
<link rel="stylesheet" href="{{ asset('css/photos/jquery.scrollbar.css') }}">
<link rel="stylesheet" href="{{ asset('css/photos/fancybox.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/photos/swiper.min.css') }}">

<link rel="stylesheet" href="{{ asset('css/photos/style.css') }}">
@endsection


@section('content')
<div class="op-container">
    <div class="row justify-content-left">
        <div class="col-md-8">
            <a href="{{ route('photos.create', $id) }}" class="btn btn-success">新增</a>
            <a href="#" class="btn btn-danger">刪除</a>
        </div>
    </div>
</div>
<div class="container-fluid photos">
    <div class="row align-items-stretch">
        @foreach($files as $file)
            <div class="col-6 col-md-6 col-lg-4" data-aos="fade-up">
                <?php
                #$tar_path = "storage/app/public/img/album".$id."/".$file;
                ?>
                <a href="{{ asset('storage/app/public/img/album$id/$file') }}" class="d-block photo-item" data-fancybox="gallery">
                    <img src="{{ asset('storage/app/public/img/album$id/$file') }}" alt="Image" class="img-fluid">
                    <div class="photo-text-more">
                        <span class="icon icon-search"></span>
                    </div>
                </a>
            </div>
        @endforeach

<!--
        <div class="col-6 col-md-6 col-lg-4" data-aos="fade-up">
            <a href="{{ asset('img/materials/img_1.jpg') }}" class="d-block photo-item" data-fancybox="gallery">
                <img src="{{ asset('img/materials/img_1.jpg') }}" alt="Image" class="img-fluid">
                <div class="photo-text-more">
                  <span class="icon icon-search"></span>
                </div>
            </a>
        </div>
        <div class="col-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <a href="{{ asset('img/materials/img_2.jpg') }}" class="d-block photo-item" data-fancybox="gallery">
                <img src="{{ asset('img/materials/img_2.jpg') }}" alt="Image" class="img-fluid">
                <div class="photo-text-more">
                  <span class="icon icon-search"></span>
                </div>
            </a>
        </div>
        <div class="col-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
            <a href="{{ asset('img/materials/img_3.jpg') }}" class="d-block photo-item" data-fancybox="gallery">
                <img src="{{ asset('img/materials/img_3.jpg') }}" alt="Image" class="img-fluid">
                <div class="photo-text-more">
                  <span class="icon icon-search"></span>
                </div>
            </a>
        </div>

        <div class="col-6 col-md-6 col-lg-4" data-aos="fade-up">
            <a href="{{ asset('img/materials/img_4.jpg') }}" class="d-block photo-item" data-fancybox="gallery">
                <img src="{{ asset('img/materials/img_4.jpg') }}" alt="Image" class="img-fluid">
                <div class="photo-text-more">
                  <span class="icon icon-search"></span>
                </div>
            </a>
        </div>
        <div class="col-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <a href="{{ asset('img/materials/img_5.jpg') }}" class="d-block photo-item" data-fancybox="gallery">
                <img src="{{ asset('img/materials/img_5.jpg') }}" alt="Image" class="img-fluid">
                <div class="photo-text-more">
                  <span class="icon icon-search"></span>
                </div>
            </a>
        </div>
        <div class="col-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
            <a href="{{ asset('img/materials/img_6.jpg') }}" class="d-block photo-item" data-fancybox="gallery">
                <img src="{{ asset('img/materials/img_6.jpg') }}" alt="Image" class="img-fluid">
                <div class="photo-text-more">
                  <span class="icon icon-search"></span>
                </div>
            </a>
        </div>

        <div class="col-6 col-md-6 col-lg-4" data-aos="fade-up">
            <a href="{{ asset('img/materials/img_7.jpg') }}" class="d-block photo-item" data-fancybox="gallery">
                <img src="{{ asset('img/materials/img_7.jpg') }}" alt="Image" class="img-fluid">
                <div class="photo-text-more">
                  <span class="icon icon-search"></span>
                </div>
            </a>
        </div>
        <div class="col-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <a href="{{ asset('img/materials/img_8.jpg') }}" class="d-block photo-item" data-fancybox="gallery">
                <img src="{{ asset('img/materials/img_8.jpg') }}" alt="Image" class="img-fluid">
                <div class="photo-text-more">
                  <span class="icon icon-search"></span>
                </div>
            </a>
        </div>
        <div class="col-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
            <a href="{{ asset('img/materials/img_9.jpg') }}" class="d-block photo-item" data-fancybox="gallery">
                <img src="{{ asset('img/materials/img_9.jpg') }}" alt="Image" class="img-fluid">
                <div class="photo-text-more">
                  <span class="icon icon-search"></span>
                </div>
            </a>
        </div>


        <div class="col-6 col-md-6 col-lg-4" data-aos="fade-up">
            <a href="{{ asset('img/materials/img_10.jpg') }}" class="d-block photo-item" data-fancybox="gallery">
                <img src="{{ asset('img/materials/img_10.jpg') }}" alt="Image" class="img-fluid">
                <div class="photo-text-more">
                  <span class="icon icon-search"></span>
                </div>
            </a>
        </div>
        <div class="col-6 col-md-6 col-lg-4" data-aos="fade-up">
            <a href="{{ asset('img/materials/person_1.jpg') }}" class="d-block photo-item" data-fancybox="gallery">
                <img src="{{ asset('img/materials/person_1.jpg') }}" alt="Image" class="img-fluid">
                <div class="photo-text-more">
                  <span class="icon icon-search"></span>
                </div>
            </a>
        </div>
        <div class="col-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <a href="{{ asset('img/materials/person_2.jpg') }}" class="d-block photo-item" data-fancybox="gallery">
                <img src="{{ asset('img/materials/person_2.jpg') }}" alt="Image" class="img-fluid">
                <div class="photo-text-more">
                  <span class="icon icon-search"></span>
                </div>
            </a>
        </div>
        <div class="col-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
            <a href="{{ asset('img/materials/person_3.jpg') }}" class="d-block photo-item" data-fancybox="gallery">
                <img src="{{ asset('img/materials/person_3.jpg') }}" alt="Image" class="img-fluid">
                <div class="photo-text-more">
                    <span class="icon icon-search"></span>
                </div>
            </a>
        </div>

        <div class="col-6 col-md-6 col-lg-4" data-aos="fade-up">
            <a href="{{ asset('img/materials/person_4.jpg') }}" class="d-block photo-item" data-fancybox="gallery">
                <img src="{{ asset('img/materials/person_4.jpg') }}" alt="Image" class="img-fluid">
                <div class="photo-text-more">
                  <span class="icon icon-search"></span>
                </div>
            </a>
        </div>
        <div class="col-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <a href="{{ asset('img/materials/person_5.jpg') }}" class="d-block photo-item" data-fancybox="gallery">
                <img src="{{ asset('img/materials/person_5.jpg') }}" alt="Image" class="img-fluid">
                <div class="photo-text-more">
                  <span class="icon icon-search"></span>
                </div>
            </a>
        </div>

-->
    </div>
</div>

@endsection


@section('js')
<script src="{{ asset('js/photos/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('js/photos/jquery-migrate-3.0.1.min.js') }}"></script>
<script src="{{ asset('js/photos/jquery-ui.js') }}"></script>
<script src="{{ asset('js/photos/popper.min.js') }}"></script>
<script src="{{ asset('js/photos/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/photos/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/photos/jquery.countdown.min.js') }}"></script>
<script src="{{ asset('js/photos/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('js/photos/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ asset('js/photos/aos.js') }}"></script>
<script src="{{ asset('js/photos/jquery.fancybox.min.js') }}"></script>
<script src="{{ asset('js/photos/swiper.min.js') }}"></script>
<script src="{{ asset('js/photos/jquery.scrollbar.js') }}"></script>
<script src="{{ asset('js/photos/main.js') }}"></script>
@endsection
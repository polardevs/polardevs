@extends('layouts.app')
@section('htmlheader_title')
    | side project - excel
@endsection
@section('main-content')
    <header>
        <div class="header-content">
            <div class="header-content-inner">
                <h1 id="homeHeading">
                    excel for approved working
                </h1>
                <h3>
                    Insert excel and fill an id you want to find.
                    {{-- 16000087 --}}
                </h3>
                <hr>
                <form action="{{ action('ExcelRenderController@store') }}" method="POST" enctype="multipart/form-data">
                    {!! csrf_field() !!}
                    <input type="file" name="excel">
                    <input type="text" name="emp_id">
                    <button class="btn">export</button>
                </form>
            </div>
            {{-- <div class="header-content-inner">
                <div class="row">
                    <form action="{{ action('ExcelRenderController@store') }}" method="POST" enctype="multipart/form-data">
                        {!! csrf_field() !!}
                        <input type="file" name="excel">
                    </form>
                </div>
            </div> --}}
        </div>
    </header>
    {{-- <section class="bg-primary" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">We've got what you need!</h2>
                    <hr class="light">
                    <p class="text-faded">Start Bootstrap has everything you need to get your new website up and running in no time! All of the templates and themes on Start Bootstrap are open source, free to download, and easy to use. No strings attached!</p>
                    <a href="#services" class="page-scroll btn btn-default btn-xl sr-button">Get Started!</a>
                </div>
            </div>
        </div>
    </section> --}}
@endsection

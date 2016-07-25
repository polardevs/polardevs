@extends('layouts.app')
@section('htmlheader_title')
    | welcome
@endsection
@section('main-content')
    <header>
        <div class="header-content">
            <div class="header-content-inner">
                <h1 id="homeHeading">
                    Build your own website with us
                </h1>
                <h2>
                    <i class="fa fa-desktop fa-3" aria-hidden="true"></i>&nbsp;&nbsp;
                    <i class="fa fa-mobile fa-3" aria-hidden="true"></i>&nbsp;&nbsp;
                    <i class="fa fa-bar-chart fa-3" aria-hidden="true"></i>&nbsp;&nbsp;
                    <i class="fa fa-comments-o fa-3" aria-hidden="true"></i>
                </h2>
                <hr>
                <p>
                    If you have any question, please do not hesitate to contact me.
                </p>
                <p>
                    <i class="fa fa-commenting-o" aria-hidden="true"> Jesada Maythangkul</i> &nbsp; <i class="fa fa-phone" aria-hidden="true"> 093-324-7915</i> &nbsp; <i class="fa fa-envelope" aria-hidden="true"> jesada@polardevs.com</i>
                </p>
                {{-- <hr>
                <a href="{{ action('ExcelRenderController@index') }}" class="btn btn-primary btn-lg page-scroll">Excel Render</a> --}}
            </div>
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

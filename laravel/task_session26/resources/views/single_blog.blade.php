@extends('layouts.app_layout')

@section('title','Single Blog')

@section('content')

<section class="single-block-wrapper section-padding">
    <div class="container">
        <div class="row">

            <div class="col-lg-8">

                <x-single-blog-content-component />

                <x-single-blog-author-component />


            </div>

            <div class="col-lg-4">

                <x-single-blog-sidebar-component />

            </div>

        </div>
    </div>
</section>

@endsection

@extends("layouts.app_layout")
@section('title','home')


@section("content")
@dd($products)
  <div class="container-fluid p-0 mb-4" style="margin-top: 60px;">
        <div class="bg-dark text-white text-center py-5" style="background: linear-gradient(to bottom, #232f3e, #eaeded);">
            <h2 class="display-5 fw-bold">Big Summer Sale</h2>
            <p>Up to 50% off on Electronics & Fashion</p>
        </div>
    </div>

    <div class="container mb-5" style="margin-top: -50px;">
        <div c lass="row g-4"></div>
         @foreach ($products as $product)
                <div class="col-md-3 col-sm-6">
                    {{-- <x-product-card-component :title="{{ $product['title'] }}" :old_price="{{ $product['old_price'] }}"> --}}
                    <x-product-card-component>
                        <x-slot name="title">{{ $product['title'] }}</x-slot>
                        <x-slot name="old_price">{{ $product['old_price'] }}</x-slot>
                        <x-slot name="new_price">{{ $product['new_price'] }}</x-slot>
                    </x-product-card-component>
                </div>
            @endforeach
        </div>
    </div>

@endsection

{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>blade</title>
</head>
<body>
    {{$user_name}}
    <ul>
        @foreach ($skills as $skill )
         <li>{{ $skill }} </li>
        @endforeach
    </ul>
</body>
</html> --}}

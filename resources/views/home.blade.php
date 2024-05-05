@extends('layouts.app')
@section('title') HOME @endsection
@section('content')

@include("category.category")

<section class="splide" role="group" aria-label="...">
    <div class="splide__track mt-3">
        <ul class="splide__list">
            @foreach($sliders as $slider)
            <li class="splide__slide text-white d-flex justify-content-center"><img src="img/slider/{{$slider->image}}" class="img-fluid rounded"></li>
        @endforeach
        </ul>
    </div>
</section>

<div class="container-xl">
    <div class="row justify-content-center my-3">
        @foreach($brands as $brand)
        <div class="col-auto">
            <a class="text-decoration-none" href="">
                <img src="img/brand/{{$brand->image}}"class="img-fluid bg-dark rounded my-2">
            </a>
        </div>
            @endforeach
    </div>
</div>

<div class="container-xl">
    <div class="row row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center g-3 my-3">
@foreach($products as $product)
        <div class="col">
            @include('app.product')
        </div>

        @endforeach


    </div>
</div>
<script>
    new Splide('.splide').mount();
</script>
@endsection
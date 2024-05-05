@extends('layouts.app')
@section('title') {{$productShow->name}} @endsection
@section('content')
    @include("category.category")
    <div class="d-flex justify-content-around bg-primary bg-opacity-10 h-100">
        <img class="m-3 rounded border shadow h-25 w-25 col-8" src="{{$productShow->getImage()}}">
        <div class="d-flex flex-column my-5 col-6">
            <div class="mt-5 p-2 h3 h-25 text-center ">
                {{$productShow->name}}
            </div>
            <div class="mt-2 fw-bold {{$productShow->discount ? 'text-danger' : 'text-primary' }} text-center h2">
                {{$productShow->discount ? $productShow->price - ($productShow->price * ($productShow->discount/100)) : $productShow->price}}</div>
            <div class=" p-2 h3 h-25 text-center">
                <div class="mt-2 fw-bold text-decoration-line-through text-secondary text-center">
                    {!! $productShow->discount ? $productShow->price : '<br>'!!}
                </div>
                <p class="card-text">
                    <small class="text-muted small text-end">Updated
                        At {{$productShow->updated_at->format('d.m.Y')}}</small>
                </p>
            </div>
        </div>
    </div>


    <div class="row row-cols-4 g-2">
        @foreach($recomends as $product)
            <div class="col">
                {{--<div class="rounded bg-secondary bg-opacity-10 p-3"><a class="nav-link link-light fw-bold px-3">--}}
                        {{--<img src="{{$recomend->getImage()}}" class="img-fluid rounded">--}}
                        {{--<div class="mt-2 text-primary small text-center">--}}
                            {{--{{$product->name}}--}}
                        {{--</div>--}}

                        {{--<div class="mt-2 fw-bold {{$recomend->discount ? 'text-danger' : 'text-primary' }} text-center h2">--}}
                            {{--{{$recomend->discount ? $recomend->price - ($recomend->price * ($recomend->discount/100)) : $recomend->price}}</div>--}}
                        {{--<div class=" p-2 h3 h-25 text-center">--}}
                            {{--<div class="mt-2 fw-bold text-decoration-line-through text-secondary text-center">--}}
                                {{--{!! $recomend->discount ? $recomend->price : '<br>'!!}--}}
                            {{--</div>--}}
                            {{--<p class="card-text">--}}
                                {{--<small class="text-muted small text-end">Updated--}}
                                    {{--At {{$recomend->updated_at->format('d.m.Y')}}</small>--}}
                            {{--</p>--}}
                        {{--</div>--}}
                    {{--</a>--}}
                {{--</div>--}}
                @include('app.product')
            </div>

        @endforeach
    </div>
@endsection
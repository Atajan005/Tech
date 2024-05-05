@extends('layouts.app')
@section('title') {{$productShow->name}} @endsection
@section('content')
    @include("category.category")
    <div class="row row-cols-lg-2 bg-primary bg-opacity-10 mt-2">
        <div class=" d-flex">
        <img class="m-3 rounded border shadow mx-sm-auto" src="{{$productShow->getImage()}}">
        </div>
        <div class="my-auto ">
            <div class="p-2 h3 text-center ">
                {{$productShow->name}}
            </div>
            <div class="mt-2 fw-bold {{$productShow->discount ? 'text-danger' : 'text-primary' }} text-center h2">
                {{$productShow->discount ? $productShow->price - ($productShow->price * ($productShow->discount/100)) : $productShow->price}}</div>
            <div class=" h3 text-center">
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


    <div class="row row-cols-2 row-cols-md-3 row-cols-xl-4 mt-3 g-2">
        @foreach($recomends as $product)
            <div class="col">
                @include('app.product')
            </div>

        @endforeach
    </div>
@endsection
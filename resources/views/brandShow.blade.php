@extends('layouts.app')
@section('title') Category @endsection
@section('content')
    {{--@include("category.category")--}}
    @include("brand.brand")
    <div class="row row-cols-4 g-2">
        @foreach($products as $product)
            <div class="col">
                @include('app.product')
            </div>
        @endforeach
    </div>
@endsection
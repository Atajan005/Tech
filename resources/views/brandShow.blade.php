@extends('layouts.app')
@section('title') Brand @endsection
@section('content')
    @include("category.category")
    @include("brand.brand")
    <div class="row row-cols-2 row-cols-md-3 row-cols-xl-4 m-auto g-2 justify-content-center">
        @foreach($products as $product)
            <div class="col">
                @include('app.product')
            </div>
        @endforeach
    </div>
@endsection
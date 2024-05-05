<div class="row justify-content-center my-3">
    @foreach($brands as $brand)
        <div class="col-auto">
            <a class="text-decoration-none" href="{{route('brand', $brand->id)}}">
                <img src="img/brand/{{$brand->image}}"class="img-fluid bg-dark rounded my-2">
            </a>
        </div>
    @endforeach
</div>
<div class="rounded bg-primary bg-opacity-10 p-3 h-100"><a class="nav-link link-light fw-bold px-3" href="{{route('product', $product->id)}}">
        <img src="{{$product->getImage()}}" class="img-fluid rounded h-50">
        <div class="mt-2 text-primary overflow-hidden" style="font-size: 0.9rem; height: 40px;
text-overflow: ellipsis;
display: -webkit-box;
-webkit-line-clamp: 2;
-webkit-box-orient: vertical;
font-family: sans-serif">
            {{$product->name}}
        </div>
        <div class="mt-2 fw-bold {{$product->discount ? 'text-danger' : 'text-primary' }} text-end h5 h-25">
            {{$product->discount ? $product->price - ($product->price * ($product->discount/100)) : $product->price}}
        </div>
        <div class="mt-2 fw-bold text-decoration-line-through text-secondary text-end">
            {!! $product->discount ? $product->price : '<br>'!!}
        </div>
        <p class="card-text">
            <small class="text-muted small text-end">Updated At {{$product->updated_at->format('d.m.Y')}}</small>
        </p>
    </a></div>
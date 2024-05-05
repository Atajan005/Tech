<nav class="navbar navbar-expand-lg navbar-dark bg-danger" aria-label="navbar">
    <div class="container-xl">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbars"
                aria-controls="navbars" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbars">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active fw-bold px-3" href="{{route('home')}}">HOME</a>
                </li>
                @foreach($categories as $category)
                    <li class="nav-item">
                        <a class="nav-link link-light fw-bold px-3"
                           href="{{route('category', $category->id)}}">{{$category->name}}</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</nav>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Layout Page</title>

    {{-- link css of bootstrap  --}}
    @include('libraries.style')

<body>

    {{-- header navbar --}}
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-expand-lg bg-body-tertiary">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="/">Point of Sales System</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/category') }}">Category</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{url('/brand')}}">Brand</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{url('/product')}}">Product</a>
                                </li>
                          
                            </ul>

                        </div>
                    </div>
                </nav>

            </div>

            <div>
                @yield('content')
            </div>
        </div>
    </div>

    {{-- link js bootstrap --}}
    @include('libraries.scripts')
</body>

</html>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous" />
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet" />
    <title>@yield('title', 'Shoe Store')</title>
</head>

<body class="bg-light shadow-lg">
    <!-- header -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-light py-2">
        <div class="container">
            <a class="navbar-brand fs-2" href="{{ route('home.index')}}">
                <img src="{{ asset('/img/logo.jpg') }}" style="height: 100px; width: 225px;" class="img-fluid rounded">
            </a>
            <button class="navbar-toggler bg-black" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon bg-black"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link active text-black" href="{{ route('home.index') }}"><i>Trang chủ</i></a>
                    <a class="nav-link active text-black" href="{{ route('product.index') }}"><i>Sản phẩm</i></a>

                    <a class="nav-link active text-black" href="{{ route('cart.index') }}"><i>Giỏ hàng</i></a>
                    <a class="nav-link active text-black" href="{{ route('about.index') }}"><i>Giới Thiệu</i></a>
                    <div class="vr bg-black x-2 d-none d-lg-block"></div>
                    @guest
                    <a class="nav-link active text-black" href="{{ route('login') }}">Đăng nhập</a>
                    <a class="nav-link acitve text-black" href="{{ route('register') }}">Đăng ký</a>
                    @else
                    <a class="nav-link active text-black" href="{{route('myaccount.orders') }}">Hóa đơn</a>
                    <form id="logout" action="{{ route('logout') }}" method="POST">
                        <a role="button" class="nav-link active text-black" onclick="document.getElementById('logout').submit();">Đăng xuất</a>
                        @csrf
                    </form>
                    @endguest
                </div>
            </div>
        </div>
    </nav>
    <header class="masthead bg-info text-white text-center py-4">
        <div class="container d-flex bg-dark align-items-center flex-column shadow-lg opacity-75">
            <h4><i class="shadow-lg">@yield('subtitle', '- “Service what you deserves” -')</i></h4>
        </div>
    </header>
    <!-- header -->

    <section>
        <div class="container">
            <div class="row">
                @yield('content')
            </div>
        </div>
    </section>
    <!-- footer -->
    <footer class="copyright py-4 text-center text-white">
        <div class="container">
            <small>
                - <a class="text-reset fw-bold text-decoration-none" target="_blank" href="https://twitter.com/danielgarax">
                    SAIGONTECH
                </a> - <b>Shoe's Store</b> -
            </small>
        </div>
    </footer>
    <!-- footer -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
</body>

</html>
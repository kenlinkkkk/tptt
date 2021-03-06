<nav class="navbar navbar-expand-lg fixed-top navbar-light">
    <div class="container">
        <a class="navbar-brand" href="{{ route('index') }}">
            <img src="{{ asset('assets/home/images/logo.png') }}" alt="logo" style="width: 80px; height: auto">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item nav-item__custom">
                    <a class="nav-link" href="{{ route('index') }}">Trang chủ</a>
                </li>
                <li class="nav-item nav-item__custom">
                    <a class="nav-link" href="#intro">Giới thiệu</a>
                </li>
                <li class="nav-item nav-item__custom">
                    <a class="nav-link" href="#huongdan">Hướng dẫn</a>
                </li>
                <li class="nav-item nav-item__custom">
                    <a class="nav-link" href="#luuy">Thể lệ</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


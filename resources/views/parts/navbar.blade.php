<div class="fixed-top">
    <div style="background-color: #114f39; padding: 2px 0;">
        <div class="container">
            <p style="float: left; color: white; margin: 0;">
                <a href="#" class="text-white"><i class="fa-brands fa-twitter"></i></a>&nbsp&nbsp
                <a href="#" class="text-white"><i class="fa-brands fa-facebook"></i></a>&nbsp&nbsp
                <a href="#" class="text-white"><i class="fa-brands fa-instagram"></i></a>&nbsp&nbsp
                <a href="#" class="text-white"><i class="fa-brands fa-telegram"></i></a>&nbsp&nbsp
                <a href="#" class="text-white"><i class="fa-brands fa-whatsapp"></i></a>
            </p>
            <p style="color: white; margin: 0;">
                &nbsp<a href="#" class="text-white"><i class="fa fa-phone-volume"></i>&nbsp162-800-1324-567</a>
                &nbsp&nbsp&nbsp<a href="#" class="text-white"><i class="fa fa-map-marker-alt"></i></a>
                &nbsp&nbsp&nbsp<a href="#" class="text-white"><i class="fa fa-envelope"></i></a>
            </p>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg" id="navbar">
        <div class="container">
            <a class="navbar-brand " id="logo_image" href="{{ route('post.index') }}"><img
                    src="{{ asset('images/Ribah.png') }}" style="height: auto; max-width: 100%;" alt="logo"></a>
            <button class="navbar-toggler bg-white" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">أخبار</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">مشاريع</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">مدونة</a>
                    </li>
                    <li class="nav-item dropdown" style="list-style: none">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            موضوع جديد
                        </a>

                        <div class="dropdown-menu text-right">
                            <a class="dropdown-item" href="{{ route('post.create.new', 1) }}">منشور</a>
                            <a class="dropdown-item" href="{{ route('post.create.new', 2) }}">مشروع</a>
                            <a class="dropdown-item" href="{{ route('post.create.new', 3) }}">اخبار</a>
                        </div>
                    </li>
                </ul>
                <div class="login">
                    <i class="fa-solid fa-user"></i>
                    <div class="login-container">
                        <a href="./login.html" class="button">تسجيل الدخول</a>
                    </div>
                </div>
                <div class="login-button">
                    <a href="login.html" class="button">تسجيل الدخول</a>
                </div>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <a href="{{ route('search_item') }}" class="search-icon"><i
                            class="fa-solid fa-magnifying-glass"></i></a>
                </form>
            </div>
        </div>
    </nav>
</div>

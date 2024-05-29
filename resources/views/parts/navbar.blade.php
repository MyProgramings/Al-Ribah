<nav class="navbar navbar-expand-lg fixed-top" id="navbar">
    <div class="container">
        <a class="navbar-brand" href="{{ route('post.index') }}"><img src="{{ asset('images/Riba.png') }}" style="width: 300px;"
                alt="logo"></a>
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
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-plus fa-fw"></i>موضوع جديد
                    </a>
    
                    <div class="dropdown-menu text-right">
                        <a class="dropdown-item" href="{{ route('post.create.new', 1 ) }}">منشور</a>
                        <a class="dropdown-item" href="{{ route('post.create.new', 2 ) }}">مشروع</a>
                        <a class="dropdown-item" href="{{ route('post.create.new', 3 ) }}">اخبار</a>
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

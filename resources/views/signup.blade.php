@extends('layouts.index')
@section('content')
    <main>
        <div class="container pb-5 vh-100 login_signup">
            <div class="row d-flex justify-content-center h-100 top_padding">
                <div class="col-md-8 col-lg-7 col-xl-6">
                    <img src="{{ asset('images/Al-Ribah_with_text.png') }}" alt="login" class="img-fluid">
                </div>
                <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
                    <form action="login.html">
                        <div class="mb-3">
                            <label for="username" class="form-label">اسم المستخدم</label>
                            <input type="text" id="username" class="form-control form-control-lg" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">البريد الإلكتروني</label> 
                            <input type="email" id="email" class="form-control form-control-lg" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">كلمة المرور</label>
                            <input type="password" id="password" class="form-control form-control-lg" required>
                        </div>
                        <div class="mb-3">
                            <label for="confirmpassword" class="form-label">تأكيد كلمة المرور</label>
                            <input type="password" id="confirmpassword" class="form-control form-control-lg" required>
                        </div>
                        <button type="submit" class="btn button">تسجيل حساب</button>
                    </form>
                    <div class="d-flex mt-4">
                        <p class="mb-0">في حال كنت تمتلك حساب يمكنك</p>
                        <a href="{{ route('log_in') }}" class="ms-3">تسجيل الدخول</a>
                    </div>
                    <div class="d-flex mt-4">
                        <p class="fw-bold mx-3 mb-0 text-muted">
                            أو يمكنك تسجيل الدخول باستخدام
                        </p>
                    </div>
                    <div class="social-media-login">
                        <a href="#" class="btn login-button" role="button">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="btn login-button" role="button">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

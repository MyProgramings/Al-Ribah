@extends('layouts.index')
@section('content')
    <main>
        <div class="container pb-5 vh-100 login_signup">
            <div class="row d-flex align-items-center justify-content-center h-100">
                <div class="col-md-8 col-lg-7 col-xl-6">
                    <img src="{{ asset('images/Al-Ribah_with_text.webp') }}" alt="login" class="img-fluid">
                </div>
                <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1 pt-5">
                    <x-jet-validation-errors class="mb-4" />

                    @if (session('status'))
                        <div class="mb-4 font-medium text-sm text-green-600">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form method="POST" action="{{ route('login') }}" dir="rtl">
                        @csrf
                        <div class="mb-4">
                            <label for="email" class="form-label">البريد الإلكتروني</label>
                            <input type="email" id="email" class="form-control form-control-lg" name="email"
                                :value="old('email')">
                        </div>
                        <div class="mb-4">
                            <label for="password" class="form-label">كلمة المرور</label>
                            <input type="password" id="password" class="form-control form-control-lg" name="password"
                                autocomplete="current-password">
                        </div>
                        <div class="form-check mb-4">
                            <input type="checkbox" id="remember_me" name="remember" class="form-check-input">
                            <label for="remember" class="form-check-label">{{ __('site.remember_me') }}</label>
                        </div>
                        <button type="submit" class="btn button">سجل الدخول</button>
                    </form>
                    <div class="d-flex mt-4">
                        <p class="mb-0">في حال كنت لاتمتلك حساب</p>
                        <a href="{{ route('signup') }}" class="ms-3">إنشاء حساب جديد</a>
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

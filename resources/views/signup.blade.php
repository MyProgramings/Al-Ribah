@extends('layouts.index')
@section('content')
    <main>
        <div class="container pb-5 vh-100 login_signup">
            <div class="row d-flex justify-content-center h-100 top_padding">
                <div class="col-md-8 col-lg-7 col-xl-6">
                    <img src="{{ asset('images/Al-Ribah_with_text.webp') }}" alt="login" class="img-fluid">
                </div>
                <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">

                    <x-jet-validation-errors class="mb-4" />

                    <form method="POST" action="{{ route('register') }}" dir="rtl">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">اسم المستخدم</label>
                            <input type="text" id="name" class="form-control form-control-lg" name="name"
                                :value="old('name')" autofocus autocomplete="name">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">البريد الإلكتروني</label>
                            <input type="email" id="email" class="form-control form-control-lg" name="email"
                                :value="old('email')">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">كلمة المرور</label>
                            <input type="password" id="password" class="form-control form-control-lg" name="password"
                                autocomplete="new-password">
                        </div>
                        <div class="mb-3">
                            <label for="password_confirmation" class="form-label">تأكيد كلمة المرور</label>
                            <input type="password" id="password_confirmation" class="form-control form-control-lg"
                                name="password_confirmation" autocomplete="new-password">
                        </div>
                        <button type="submit" class="btn button">تسجيل حساب</button>
                    </form>
                    @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                        <div class="mt-4">
                            <x-jet-label for="terms">
                                <div class="flex items-center">
                                    <x-jet-checkbox name="terms" id="terms" />

                                    <div class="ml-2">
                                        {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                            'terms_of_service' =>
                                                '<a target="_blank" href="' .
                                                route('terms.show') .
                                                '" class="underline text-sm text-gray-600 hover:text-gray-900">' .
                                                __('Terms of Service') .
                                                '</a>',
                                            'privacy_policy' =>
                                                '<a target="_blank" href="' .
                                                route('policy.show') .
                                                '" class="underline text-sm text-gray-600 hover:text-gray-900">' .
                                                __('Privacy Policy') .
                                                '</a>',
                                        ]) !!}
                                    </div>
                                </div>
                            </x-jet-label>
                        </div>
                    @endif
                    <div class="d-flex mt-4">
                        <p class="mb-0">في حال كنت تمتلك حساب يمكنك</p>
                        <a href="{{ route('signup') }}" class="ms-3">تسجيل الدخول</a>
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

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
                &nbsp<a href="" class="text-white">support@alribbah.org &nbsp<i class="fa fa-envelope"></i></a>
                &nbsp&nbsp&nbsp<a href="https://maps.app.goo.gl/oAr8cFnJFHVvayxG9" class="text-white"><i class="fa fa-map-marker-alt"></i></a>
                &nbsp<a href="#" class="text-white"></a>
            </p>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg" id="navbar">
        <div class="container">
            <a class="navbar-brand " id="logo_image" href="{{ route('index_blog') }}"><img
                    src="{{ asset('logo.png') }}" style="height: auto; max-width: 100%;" alt="logo"></a>
            <button class="navbar-toggler bg-white" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about.us') }}">من نحن</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('post.index') }}">مدونة</a>
                    </li>
                    <li class="nav-item dropdown" style="list-style: none">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            الصفحات
                        </a>
        
                        <div class="dropdown-menu text-right">
                            @foreach($pages as $page)
                                <a class="dropdown-item" href="{{ route('page.show',$page->slug ) }}">{{ $page->title }}</a>
                            @endforeach
                        </div>
                    </li>
                    @admin
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
                    @endadmin
                </ul>
                <form class="d-flex search-small" method="post" action="{{ route('search') }}">
                    @csrf
                    <input class="form-control" name="keyword" type="search" placeholder="ابحث عن..." aria-label="Search">
                    <button type="submit" class="search-icon me-2" style="border: none; background: none;"><i class="fa-solid fa-magnifying-glass"></i></button>
                </form>
                <div class="topbar topbar-notification" style="z-index:1">
                    @admin
                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow alert-dropdown mx-1" style="list-style: none;">
                            <a class="nav-link dropdown-toggle dropdown-toggle-notification ms-2" href="#" id="alertsDropdown" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw fa-lg"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter notif-count rounded-circle" data-count="{{ App\Models\Alert::where('user_id', Auth::user()->id)->first()->alert }}">{{ App\Models\Alert::where('user_id', Auth::user()->id)->first()->alert }}</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right text-right mt-2 mr-auto" style="left: 0; right: auto; width: 300px;"
                                aria-labelledby="alertsDropdown">
                                <div class="alert-body">
                                        
                                </div>
                                <a class="dropdown-item text-center small text-gray-500" href="{{ route('all.Notification') }}">عرض جميع الإشعارات</a>
                            </div>
                        </li>
                    @endadmin
                </div>
                <div class="login">
                    @guest
                        <i class="fa-solid fa-user m-0"></i>
                        <div class="login-container">
                            <a href="{{ route('login') }}" class="button">تسجيل الدخول</a>
                            <hr>
                            <a href="{{ route('register') }}" class="button">إنشاء حساب</a>
                        </div>
                    @else
                        <li class="nav-item dropdown" style="list-style: none">
                            <a id="navbarDropdown" class="nav-link" href="#" data-bs-toggle="dropdown">
                                <img src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}"
                                    style="clip-path: circle(); width: 40px;" />
                            </a>

                            <div class="dropdown-menu text-right" style="left: 0; right: auto;">
                                <div class="pb-1 border-t border-gray-200">

                                    <div class="mt-3 space-y-1">
                                        <!-- Account Management -->
                                        @admin
                                            <a href="{{ route('admin.dashboard') }}" class="dropdown-item">لوحة الإدارة</a>
                                            <x-jet-responsive-nav-link href="{{ route('profile', Auth::user()->id) }}"
                                                :active="request()->routeIs('profile')">
                                                <div class="dropdown-item font-medium text-base text-gray-800">
                                                    {{ Auth::user()->name }}</div>
                                            </x-jet-responsive-nav-link>
                                        @endadmin

                                        <x-jet-responsive-nav-link class="dropdown-item"
                                            href="{{ route('profile.show') }}" :active="request()->routeIs('profile.show')">
                                            {{ __('الملف الشخصي') }}
                                        </x-jet-responsive-nav-link>

                                        @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                            <x-jet-responsive-nav-link class="dropdown-item"
                                                href="{{ route('api-tokens.index') }}" :active="request()->routeIs('api-tokens.index')">
                                                {{ __('API Tokens') }}
                                            </x-jet-responsive-nav-link>
                                        @endif

                                        <!-- Authentication -->
                                        <form method="POST" action="{{ route('logout') }}" x-data>
                                            @csrf

                                            <x-jet-responsive-nav-link href="{{ route('logout') }}" class="dropdown-item"
                                                onclick="event.preventDefault();
                                            this.closest('form').submit();">
                                                {{ __('تسجيل خروج') }}
                                            </x-jet-responsive-nav-link>
                                        </form>

                                        <!-- Team Management -->
                                        @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                                            <div class="border-t border-gray-200"></div>

                                            <div class="block px-4 py-2 text-xs text-gray-400">
                                                {{ __('Manage Team') }}
                                            </div>

                                            <!-- Team Settings -->
                                            <x-jet-responsive-nav-link
                                                href="{{ route('teams.show', Auth::user()->currentTeam->id) }}"
                                                :active="request()->routeIs('teams.show')">
                                                {{ __('Team Settings') }}
                                            </x-jet-responsive-nav-link>

                                            @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                                                <x-jet-responsive-nav-link href="{{ route('teams.create') }}"
                                                    :active="request()->routeIs('teams.create')">
                                                    {{ __('Create New Team') }}
                                                </x-jet-responsive-nav-link>
                                            @endcan

                                            <div class="border-t border-gray-200"></div>

                                            <!-- Team Switcher -->
                                            <div class="block px-4 py-2 text-xs text-gray-400">
                                                {{ __('Switch Teams') }}
                                            </div>

                                            @foreach (Auth::user()->allTeams() as $team)
                                                <x-jet-switchable-team :team="$team"
                                                    component="jet-responsive-nav-link" />
                                            @endforeach
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </li>
                    @endguest
                </div>
                <div class="login-button mt-2">
                    @guest
                        <a href="{{ route('login') }}" class="button">تسجيل الدخول</a>
                        <a href="{{ route('register') }}" class="button">إنشاء حساب</a>
                    @else
                    <li class="nav-item dropdown" style="list-style: none">
                        <a id="navbarDropdown" class="nav-link" href="#" data-bs-toggle="dropdown">
                            <img src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}"
                                style="clip-path: circle(); width: 40px;" />
                        </a>

                        <div class="dropdown-menu text-right">
                            <div class="pb-1 border-t border-gray-200">

                                <div class="mt-3 space-y-1">
                                    <!-- Account Management -->
                                    @admin
                                        <a href="{{ route('admin.dashboard') }}" class="dropdown-item">لوحة الإدارة</a>
                                        <x-jet-responsive-nav-link href="{{ route('profile', Auth::user()->id) }}"
                                            :active="request()->routeIs('profile')">
                                            <div class="dropdown-item font-medium text-base text-gray-800">
                                                {{ Auth::user()->name }}</div>
                                        </x-jet-responsive-nav-link>
                                    @endadmin

                                    <x-jet-responsive-nav-link class="dropdown-item"
                                        href="{{ route('profile.show') }}" :active="request()->routeIs('profile.show')">
                                        {{ __('الملف الشخصي') }}
                                    </x-jet-responsive-nav-link>

                                    @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                        <x-jet-responsive-nav-link class="dropdown-item"
                                            href="{{ route('api-tokens.index') }}" :active="request()->routeIs('api-tokens.index')">
                                            {{ __('API Tokens') }}
                                        </x-jet-responsive-nav-link>
                                    @endif

                                    <!-- Authentication -->
                                    <form method="POST" action="{{ route('logout') }}" x-data>
                                        @csrf

                                        <x-jet-responsive-nav-link href="{{ route('logout') }}" class="dropdown-item"
                                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                                            {{ __('تسجيل خروج') }}
                                        </x-jet-responsive-nav-link>
                                    </form>

                                    <!-- Team Management -->
                                    @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                                        <div class="border-t border-gray-200"></div>

                                        <div class="block px-4 py-2 text-xs text-gray-400">
                                            {{ __('Manage Team') }}
                                        </div>

                                        <!-- Team Settings -->
                                        <x-jet-responsive-nav-link
                                            href="{{ route('teams.show', Auth::user()->currentTeam->id) }}"
                                            :active="request()->routeIs('teams.show')">
                                            {{ __('Team Settings') }}
                                        </x-jet-responsive-nav-link>

                                        @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                                            <x-jet-responsive-nav-link href="{{ route('teams.create') }}"
                                                :active="request()->routeIs('teams.create')">
                                                {{ __('Create New Team') }}
                                            </x-jet-responsive-nav-link>
                                        @endcan

                                        <div class="border-t border-gray-200"></div>

                                        <!-- Team Switcher -->
                                        <div class="block px-4 py-2 text-xs text-gray-400">
                                            {{ __('Switch Teams') }}
                                        </div>

                                        @foreach (Auth::user()->allTeams() as $team)
                                            <x-jet-switchable-team :team="$team"
                                                component="jet-responsive-nav-link" />
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                        </div>
                    </li>
                    @endguest
                </div>
            </div>
        </div>
    </nav>
</div>

<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{!! asset('css/style.css') !!}">
    <link rel="stylesheet" href="{!! asset('css/article.css') !!}">
    <link rel="stylesheet" href="{!! asset('css/search.css') !!}">
    <link rel="stylesheet" href="{!! asset('css/sign.css') !!}">
    <link href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" rel="stylesheet"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.rtl.min.css" rel="stylesheet"
        integrity="sha384-DOXMLfHhQkvFFp+rWTZwVlPVqdIhpDVYT9csOnHSgWQWPX0v5MCGtjCJbY6ERspU" crossorigin="anonymous">
    <title>الربّة</title>
    <style>
        body {
            font-family: 'Cairo', sans-serif;
            background-color: #f4f7eb;
            color: #114f39;
        }

        a {
            text-decoration: none !important;
            color: #114f39;
        }

        input[type=file] {
            position: absolute !important;
            width: 100% !important;
            height: 100% !important;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            opacity: 0;
            cursor: pointer;
        }

        .input-title {
            width: 100%;
            padding: 30px;
            background: rgba(255, 255, 255, 0.2);
            border: 2px dashed rgba(255, 255, 255, 0.2);
            text-align: center;
            transition: background 0.3s ease-in-out;
        }

        .file-area:hover .input-title {
            background: rgba(255, 255, 255, 0.1);
        }

        input[type=file]+.input-title {
            border-color: #f0f0f0;
            background-color: #f0f0f0;
        }
    </style>
    @yield('style')
    {{-- @vite(['resources/js/app.js']) --}}
    @livewireStyles
</head>

<body dir="rtl" style="text-align: right;">
    <header>
        @include('parts.navbar')
    </header>

    @yield('content')

    <footer>
        @include('parts.footer')
    </footer>

    <!-- <script src="./js/indexPage/config.js"></script>
    <script src="./js/indexPage/sliderComponent.js"></script> -->
    <script src="{!! asset('theme/vendor/jquery/jquery.min.js') !!}"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="{!! asset('js/swiper.js') !!}"></script>
    <script src="{!! asset('js/index.js') !!}"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
    </script>
    <!-- ckeditor -->
    <script src="https://cdn.ckeditor.com/ckeditor5/35.0.1/classic/ckeditor.js"></script>
    {{-- pusher --}}
    <script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>
    <script>

        // Enable pusher logging - don't include this in production
        Pusher.logToConsole = true;
    
        var pusher = new Pusher('542558b94ea5ff3fe16e', {
          cluster: 'mt1'
        });
    
        var channel = pusher.subscribe('my-channel');
        channel.bind('my-event', function(data) {
          alert(JSON.stringify(data));
        });
      </script>  
    <script type="module">
        @if(Auth::check())
            var post_userId = {{Auth::user()->id}};
            Echo.private(`real-notification.${post_userId}`)
            .listen('CommentNotification', (data) => {
                var notificationsWrapper = $('.alert-dropdown');
                var notificationsToggle = notificationsWrapper.find('a[data-bs-toggle]');
                var notificationsCountElem = notificationsToggle.find('span[data-count]');
                var notificationsCount = parseInt(notificationsCountElem.text());
                var notifications = notificationsWrapper.find('div.alert-body');

                var existingNotifications = notifications.html();
                var newNotificationHtml = '<a class="dropdown-item d-flex align-items-center" href="#">\
                                                <div class="ml-3">\
                                                    <div">\
                                                        <img style="float:right" src='+data.user_image+' width="50px" class="rounded-full"/>\
                                                    </div>\
                                                </div>\
                                                <div>\
                                                    <div class="small text-gray-500">'+data.date+'</div>\
                                                    <span>'+data.user_name+' وضع تعليقًا على المنشور <b>'+data.post_title+'<b></span>\
                                                </div>\
                                            </a>';
                notifications.html(newNotificationHtml + existingNotifications);
                notificationsCount += 1;  
                notificationsWrapper.find('.notif-count').text(notificationsCount);
                notificationsWrapper.show();
            });
        @endif
    </script>

    <script>
        var token = '{{ Session::token() }}';
        var urlNotify = '{{ route('notification') }}';

        $('#alertsDropdown').on('click', function(event) {
            event.preventDefault();
            var notificationsWrapper = $('.alert-dropdown');
            var notificationsToggle = notificationsWrapper.find('a[data-bs-toggle]');
            var notificationsCountElem = notificationsToggle.find('span[data-count]');
            
            notificationsCount = 0;
            notificationsCountElem.attr('data-count', notificationsCount);
            notificationsWrapper.find('.notif-count').text(notificationsCount);
            notificationsWrapper.show();

            $.ajax({
                method: 'POST',
                url: urlNotify,
                data: {
                    _token: token
                },
                success : function(data) {
                    var resposeNotifications = "";
                    $.each(data.someNotifications , function(i, item) {
                        var post_slug = "{{ route('post.show', ':post_slug') }}";
                        post_slug = post_slug.replace(':post_slug', item.post_slug);
                        resposeNotifications += '<a class="dropdown-item d-flex align-items-center px-2" href='+post_slug+'>\
                                                    <div class="me-2">\
                                                        <div">\
                                                            <img style="float:right; width: 50px;" src='+item.user_image+' width="50px" class="rounded-circle"/>\
                                                        </div>\
                                                    </div>\
                                                    <div>\
                                                        <div class="small text-gray-500">'+item.date+'</div>\
                                                        <span style="font-size: 15px !important;">'+item.user_name+' وضع تعليقًا على المنشور <b>'+item.post_title+'<b></span>\
                                                    </div>\
                                                </a>';
                    

                        $('.alert-body').html(resposeNotifications);
                });
                }
            });
        });
    </script>
    @yield('script')
    @livewireScripts
</body>

</html>

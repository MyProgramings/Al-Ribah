@extends('layouts.index')
@section('content')
    <main>
        <div class="article-header">
            <div class="container">
                <div class="header-category">
                    <span class="me-1">تكنولوجيا</span> | <span class="ms-1">ميكروسوفت</span>
                </div>
                <div class="header-title">
                    <h2>{{ $post->title }}</h2>
                </div>
            </div>
        </div>
        <div class="article-main">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="article-img">
                            <img src="{{ asset('/storage/images/' . $post->image_path) }}" alt="...">
                        </div>
                        <div class="article-subtitle">
                            <span>{{ $post->title }}</span>
                        </div>
                        <div class="article-datetime">
                            <time datetime="01-01-2023">{{ $post->created_at->locale('ar')->dayName }}
                                {{ $post->created_at->format('d/m/Y') }}</time>
                        </div>
                        <div class="article-body">
                            <article>
                                <p class="lh-lg">{!! $post->body !!}</p>
                            </article>
                            <section class="suggested-stories">
                                <h2 class="section-title">
                                    القصص المقترحة
                                </h2>
                                <div class="stories posts">
                                    @includewhen(count($posts) == 0, 'alerts.empty', [
                                        'msg' => 'لا توجد منشورات',
                                    ])
                                    @foreach ($posts as $pst)
                                        <a href="#" class="article-link">
                                            <div class="story-card mt-5">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <img src="{{ asset('/storage/images/' . $pst->image_path) }}"
                                                            alt="...">
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <p>{{ $pst->title }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    @endforeach
                                    <div class="row text-center" style="padding:20px;">
                                        <button class="btn btn-success load-more-data">Load More Data...</button>
                                    </div>
                                </div>
                            </section>
                            <article>
                                <iframe width="560" height="315"
                                    src="https://www.youtube.com/embed/3co8f2nLb9I?si=CSIlExbayjSrexQs"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe><br>
                                <span class="keyword me-3">لوريوم</span>
                                <span class="keyword me-3">حسوب</span>
                                <span class="keyword me-3">أبسويوم</span>
                            </article><br>
                        </div>
                        @auth
                            <section class="comments mt-5">
                                <h2 class="section-title">
                                    التعليقات
                                </h2>
                                <form action="{{ route('comment.store') }}" id="comments" method="post">
                                    @csrf
                                    <textarea name="body" id="comment" class="comment-textarea @error('body') is-invalid @enderror"
                                        placeholder="أكتب تعليقًا هنا ..."></textarea>
                                    @error('body')
                                        <span class="invalid-feedback">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <button type="submit" class="button">نشر</button>
                                    <input type="hidden" name="post_id" value="{{ $post->id }}">
                                </form>
                                <hr>
                                <div class="comment-cards" id="comment-cards">
                                    @include('comments.new_comments', [
                                        'comments' => $comments,
                                        'post_id' => $post->id,
                                    ])
                                </div>
                                <hr class="mt-5 mb-5">
                            </section>
                        @endauth
                        <section class="related-articles">
                            <h2 class="section-title">
                                مقالات ذات صلة
                            </h2>
                            <div class="row">
                                <div class="col-sm-4">
                                    <a href="article.html" class="article-link">
                                        <img src="{{ asset('images/picture-12.jpg') }}" alt="...">
                                        <div class="article-text mt-3">
                                            <span class="article-category">
                                                اقتصاد
                                            </span>
                                            <h5 class="article-title">
                                                لوريم إيبسوم هو ببساطة نص شكلي بمعنى أن الغاية هي الشكل وليس المحتوى
                                                ويُستخدم
                                            </h5>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-sm-4">
                                    <a href="article.html" class="article-link">
                                        <img src="{{ asset('images/picture-10.jpg') }}" alt="...">
                                        <div class="article-text mt-3">
                                            <span class="article-category">
                                                اقتصاد
                                            </span>
                                            <h5 class="article-title">
                                                لوريم إيبسوم هو ببساطة نص شكلي بمعنى أن الغاية هي الشكل وليس المحتوى
                                                ويُستخدم
                                            </h5>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-sm-4">
                                    <a href="article.html" class="article-link">
                                        <img src="{{ asset('images/picture-15.jpg') }}" alt="...">
                                        <div class="article-text mt-3">
                                            <span class="article-category">
                                                اقتصاد
                                            </span>
                                            <h5 class="article-title">
                                                لوريم إيبسوم هو ببساطة نص شكلي بمعنى أن الغاية هي الشكل وليس المحتوى
                                                ويُستخدم
                                            </h5>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="text-center">
                                <a href="#" class="btn button">
                                    المزيد
                                </a>
                            </div>
                            <hr class="mt-4 mb-5">
                        </section>
                    </div>
                    <div class="col-md-4">
                        <div class="most-read">
                            <h2 class="section-title">الأكثر قراءة</h2>
                            @includewhen(count($posts) == 0, 'alerts.empty', ['msg' => 'لا توجد منشورات'])
                            @foreach ($posts as $pst)
                                <a href="#" class="article-link">
                                    <div class="most-read-article">
                                        <img src="{{ asset('/storage/images/' . $pst->image_path) }}" alt="...">
                                        <div class="most-read-text">
                                            <h4 class="article-title">{{ $pst->title }}</h4>
                                            <time datetime="01/01/2023">{{ $pst->created_at->locale('ar')->dayName }}
                                                {{ $pst->created_at->format('d/m/Y') }}</time>
                                        </div>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
@section('script')
    <script>
        var ENDPOINT = "{{ route('posts.index') }}";
        var page = 1;

        $(".load-more-data").click(function() {
            page++;
            LoadMore(page);
        });

        function LoadMore(page) {
            $.ajax({
                    url: ENDPOINT + "?page=" + page,
                    datatype: "html",
                    type: "get",
                    beforeSend: function() {
                        $('.auto-load').show();
                    }
                })
                .done(function(response) {
                    console.log(response);
                    if (response.html == '') {
                        $('.auto-load').html("End :(");
                        return;
                    }
                    $('.auto-load').hide();
                    $("#data-wrapper").append("<div class='row'>" + response.html + "</div>");
                })
                .fail(function(jqXHR, ajaxOptions, thrownError) {
                    console.log('Server error occured');
                });
        }
    </script>
@endsection

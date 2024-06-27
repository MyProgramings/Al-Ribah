@extends('layouts.index')
@section('content')
    <main>
        <div class="article-header">
            <div class="container">
                @isset($post)
                    <div class="header-category">
                        <span class="me-1">تكنولوجيا</span> | <span class="ms-1">ميكروسوفت</span>
                    </div>

                    <div class="header-title">
                        <h2>{{ $post->title }}</h2>
                    </div>
                @endisset
            </div>
        </div>
        <div class="article-main">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        @isset($post)
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
                        @endisset
                        <div class="article-body">
                            @isset($post)
                                <article>
                                    <p class="lh-lg">{!! $post->body !!}</p>
                                </article>
                            @endisset
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
                                </div>
                            </section>
                            <article>
                                <iframe width="560" height="315"
                                    src="https://www.youtube.com/embed/3co8f2nLb9I?si=CSIlExbayjSrexQs"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe><br>
                                <span class="keyword me-3">لوريوم</span>
                                <span class="keyword me-3">الربة</span>
                                <span class="keyword me-3">أبسويوم</span>
                            </article><br>
                        </div>
                        @auth
                            @isset($post)
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
                            @endisset
                        @endauth

                    </div>
                    @isset($post)
                        <div class="col-md-4">
                            <div class="most-read">
                                <h2 class="section-title">مقالات ذات صلة</h2>

                                @includewhen(count($related_posts) == 0, 'alerts.empty', [
                                    'msg' => 'لا توجد مقالات',
                                ])
                                @foreach ($related_posts as $relate_post)
                                    <a href="#" class="article-link">
                                        <div class="most-read-article">
                                            <img src="{{ asset('/storage/images/' . $relate_post->image_path) }}"
                                                alt="...">
                                            <div class="most-read-text">
                                                <h4 class="article-title">{{ $relate_post->title }}</h4>
                                                <time
                                                    datetime="01/01/2023">{{ $relate_post->created_at->locale('ar')->dayName }}
                                                    {{ $relate_post->created_at->format('d/m/Y') }}</time>
                                            </div>
                                        </div>
                                    </a>
                                @endforeach

                            </div>
                        </div>
                    @endisset
                </div>
            </div>
        </div>
    </main>
@endsection

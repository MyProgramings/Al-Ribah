<section class="videos pb-0" style="background-color: #f4f7eb">
    <div class="container">
        <h2 class="section-title" style="color: #114f39">
            أحدث الأخبار
        </h2>
        <div class="swiper">
            <div class="swiper-wrapper" style="margin-bottom: 30px !important;">
                @includewhen(count($posts) == 0, 'alerts.empty', ['msg' => 'لا توجد أخبار'])
                @foreach ($posts as $post)
                    <div class="swiper-slide swiper-slide-news">
                        <a href="{{ route('post.show', $post->slug) }}" class="article-link">
                            <div class="row">
                                <div class="mb-3">
                                    <img src="{{ asset('/storage/posts-images/' . $post->image_path) }}" alt="...">
                                </div>
                                <div class="article-text">
                                    <span class="article-category me-1">
                                        {{ __('مشاريع') }}
                                    </span>
                                    <h5 class="article-title">{!! Str::limit($post->title, 70) !!}</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>

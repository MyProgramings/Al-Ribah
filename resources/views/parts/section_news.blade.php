<section class="news">
<div class="container">
    <h2 class="section-title">
        مشاريع وأنشطة الجمعية
    </h2>
    <div class="row">
        @includewhen(count($posts) == 0, 'alerts.empty', ['msg' => 'لا توجد منشورات'])
        @foreach ($posts as $post)
        @if ($post->type == 1)
            <div class="col-lg-3 col-md-4 col-sm-6 mt-4">
                <a href="./article.html" class="article-link">
                    <img src="{{ asset('/storage/images/' . $post->image_path) }}" alt="...">
                    <div class="article-text mt-3">
                        <span class="article-category">
                            {{ $post->category->title }}
                        </span>
                        <h5 class="article-title">{!! Str::limit($post->title, 55, '...') !!}</h5>
                    </div>
                </a>
            </div>
        @endif
        @endforeach
    </div>
    <div class="text-center mt-5">
        <a href="#" class="btn button">
            المزيد
        </a>
    </div>
</div>
</section>
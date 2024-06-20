<section class="opinions">
    <div class="container">
        <h2 class="section-title">
            مقالات الرأي
        </h2>
        <div class="row">
            @includewhen(count($posts_blog) == 0, 'alerts.empty', ['msg' => 'لا توجد مقالات'])
            @foreach ($posts_blog as $post_blog)
                <div class="col-lg-3 col-md-4 col-sm-6 rounded">
                    <a href="{{ route('post.show', $post_blog->slug) }}">
                        <div class="opinions-card rounded border border-success">
                            <h6>{!! Str::limit($post_blog->title, 45) !!}</h6>
                            <div class="user-info mr-3" style="margin-right: 10px;">
                                <img src="{{ $post_blog->user->profile_photo_url }}" style="width: 50px;" alt="...">
                                <span>{!! Str::limit($post_blog->user->name, 20) !!}</span>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</section>

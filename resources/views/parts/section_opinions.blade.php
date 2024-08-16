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
                        <div class="opinions-card rounded">
                            <table style="height: 100%;
    border-collapse: collapse;">
                                <tr>
                                    <td valign="top">
                                        <h6>{!! Str::limit($post_blog->title, 55) !!}</h6>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="bottom">
                                        <div class="user-info mr-3">
                                            <img src="{{ $post_blog->user->profile_photo_url }}" style="width: 50px;"
                                                alt="...">
                                            <span>{!! Str::limit($post_blog->user->name, 20) !!}</span>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</section>

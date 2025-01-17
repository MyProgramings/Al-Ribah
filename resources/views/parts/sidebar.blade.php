<div class="col-md-4">
    <div class="card border-0" style="-webkit-box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.15);">
        <h5 class="card-header border-0">التصنيفات</h5>
        <div class="card-body">
            <ul class="nav flex-column p-0" style="list-style: none !important;">
                <li class="nav-item">
                    <a class="nav-link text-dark" href="{{ url('/') }}">جميع التصنيفات ( {{ $posts_number }})</a>
                </li>
                @foreach ($categories as $cat)
                    <li class="nav-item">
                        <a class="nav-link text-dark"
                            href="{{ route('category', [$cat->id, $cat->slug]) }}">{{ $cat->title }}
                            ({{ $cat->posts->count() }})
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>

    <!-- Side Widget -->
    <div class="card my-4 text-right border-0" style="-webkit-box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.15);">
        <h5 class="card-header border-0">آخر التعليقات</h5>
        <ul class="list-group p-0">
            @foreach ($recent_comments as $comment)
                <li class="list-group-item">
                    <a href="{{ route('post.show', $comment->Post->slug) }}#comments"
                        class="d-flex align-items-center"style="color: #114f39;">
                        <img style="float:right; width: 40px;"src="{{ $comment->user->profile_photo_url }}"
                            class="rounded-circle" />
                        <span class="mx-1 d-inline-block"><strong>{{ $comment->user->name }}</strong></span>
                        <span>{{ \Illuminate\Support\Str::limit($comment->body, 60) }}</span>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</div>

@foreach ($posts as $post)
    <div class="card mb-3 card-posts border-0">
        <div class="card-body card-posts-body">
            <div class="row">
                <div class="col-sm-1 photo-post">
                    <img src="{{ $post->user->profile_photo_url }}" width="50px"
                        class="rounded-circle" />
                </div>
                <div class="col-sm-11 info-post">
                    <p class="m-0"><strong>{{ $post->user->name }}</strong>
                    </p>
                    <div class="row">
                        <div class="col-4">
                            <i class="far fa-clock"></i> <span
                                class="text-secondary">{{ $post->created_at->diffForHumans() }}</span>
                        </div>
                        <div class="col-4 ps-2">
                            <i class="fa-solid fa-align-justify"></i> <span
                                class="text-secondary">{{ $post->category->title }}</span>
                        </div>
                        <div class="col-4">
                            <i class="fa-solid fa-comment"></i> <span
                                class="text-secondary">{{ $post->comments->count() }} تعليقات</span>
                        </div>
                    </div>
                </div>
            </div>
            <h4 class="my-2 h4"><a href="{{ route('post.show', $post->slug) }}">{{ $post->title }}</a>
            </h4>
            <p class="card-text mb-2">{!! Str::limit($post->body, 200) !!}</p>
        </div>
    </div>
@endforeach

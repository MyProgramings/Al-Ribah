@includewhen(!count($contents->posts), 'alerts.empty',['msg' => 'لا توجد أي مشاركات بعد'])

@foreach($contents->posts as $post)
    <div class="row mb-2">
        <div class="card mb-3 card-posts border-0">
            <div class="card-body card-posts-body">
                <div class="row">
                    <div class="col-12 text-right">
                        @if (Auth::check())
                            @can('delete-post', $post)
                                <form method="POST" action="{{ route('post.destroy', $post->id) }}" onsubmit="return confirm('هل أنت متأكد أنك تريد حذف المنشور هذا؟')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="float-end border-0 ms-2 bg-white"><i class="far fa-trash-alt text-danger fa-lg"></i></button>
                                </form>
                            @endcan

                            @can('edit-post', $post)
                            <form method="GET" action="{{ route('post.edit', $post->id) }}">
                                @csrf
                                @method('PATCH')
                                <button type="submit" class="float-end border-0 bg-white"><i class="far fa-edit text-success fa-lg ml-3"></i></button>
                            </form>
                            @endcan

                        @endif
                        <div class="row">
                            <div class="col-sm-1 photo-post">
                                <img style="float:right; width: 50px;" src="{{ $post->user->profile_photo_url }}" class="rounded-circle"/>
                            </div>
                            <div class="col-sm-11 info-post">
                                <p class="m-0" style="display:inline-block;"><strong>{{$post->user->name}}</strong></p>
                                <div class="row">
                                    <div class="col-4">
                                        <i class="far fa-clock"></i> <span class="text-secondary">{{$post->created_at->diffForHumans()}}</span>
                                    </div>
                                    <div class="col-4">
                                        <i class="fa-solid fa-align-justify"></i> <span class="text-secondary">{{$post->category->title}}</span>
                                    </div>
                                    <div class="col-4">
                                        <i class="fa-solid fa-comment"></i> <span class="text-secondary">{{$post->comments->count()}} تعليقات</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h4 class="my-2 h4" ><a href="{{ route('post.show', $post->slug)}}">{{$post->title}}</a></h4>
                        <p class="card-text mb-2">{!! Str::limit($post->body , 200) !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach
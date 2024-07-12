<div class="col-md-4">
    <div class="card">
        <h5 class="card-header">التصنيفات</h5>
        <div class="card-body">
            <ul class="nav flex-column p-0" style="list-style: none !important;">
                <li class="nav-item">
                    <a class="nav-link text-dark" href="{{ url('/post') }}">جميع التصنيفات ( {{ $posts_number }})</a>
                </li>
                @foreach($categories as $cat)
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="{{ route('category',[$cat->id, $cat->slug]) }}">{{$cat->title}} ({{ $cat->posts->count()}})</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>

    <!-- Side Widget -->
    <div class="card my-4 text-right">
        <h5 class="card-header">آخر التعليقات</h5>
        <ul class="list-group p-0" style="list-style:none !important;">
            @foreach($recent_comments as $comment)
                <li class="list-group-item" style="border-left: 0px; border-right: 0px;  border-top: 0px;">
                    <a href="{{ route('post.show', $comment->Post->slug) }}#comments">
                        <img style="float:right; width: 40px;" src="{{$comment->user->profile_photo_url}}" class="rounded-circle"/>
                        <span class="mt-1 ms-1 d-inline-block"><strong>{{$comment->user->name}}</strong></span> 
                        <span>{{\Illuminate\Support\Str::limit($comment->body, 60) }}</span>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</div>

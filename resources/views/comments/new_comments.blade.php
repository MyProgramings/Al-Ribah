@foreach ($comments as $comment)
    <div class="comment-card">
        <div class="row">
            <div class="col-lg-2 col-3">
                <div class="user-photo">
                    <img src="{{$comment->user->profile_photo_url}}" alt="..." style="width: 90px;">
                </div>
            </div>
            <div class="col-lg-10 col-9">
                <div class="comment-text">
                    <span class="user-name">{{$comment->user->name}}</span>
                    <p>{{$comment->body}}</p>
                </div>
            </div>
        </div>
    </div>
@endforeach

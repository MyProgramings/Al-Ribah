@extends('layouts.index')

@section('content')
<div class="container text-muted">
    <div class="row mb-4 make-center">
        <div>
            @isset($contents)
                <img src="{{ $contents->profile_photo_url }}" class="rounded-circle mx-auto" style="width: 150px;"/>
                <h2 class="text-center mt-1">{{ $contents->name }}</h2>
            @endisset
        </div>
    </div>

    <div class="row p-3">
        @isset($contents)
            <ul class="nav nav-tabs mb-3">
                    @php
                        $user_id = $contents->id;
                        $comments = Route::current()->getName() == 'user_comments';
                    @endphp
                <li class="nav-item" style="list-style:none">
                    <a class="nav-link {{ $comments ? '' : 'active' }}" href="{{ route('profile', $user_id) }}">منشوراتي</a>
                </li>
                <li class="nav-item" style="list-style:none">
                    <a class="nav-link {{ $comments ? 'active' : '' }}" href="{{ route('user_comments', $user_id) }}">تعليقاتي</a>
                </li>
            </ul>
            @if ($comments)
                @include('user.comments_section')
            @else
                @include('user.posts_section')
            @endif
        @endisset

    </div>   
</div>

@endsection
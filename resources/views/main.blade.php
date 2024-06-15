@extends('layouts.index')

@section('content')
    <header>
        @include('parts.news')
    </header>
    <main>
        @include('parts.section_last_news')
        @include('parts.section_news')
        @include('parts.section_most_read')
        @include('parts.structure')
        @include('parts.section_opinions')
        @include('parts.section_videos')
        @include('parts.section_latest_news')
        {{-- @include('partials.sidebar') --}}
    </main>
@endsection

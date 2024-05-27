@extends('layouts.index')

@section('content')
    @include('parts.section_news')
    @include('parts.section_most_read')
    @include('parts.section_opinions')
    @include('parts.section_videos')
    @include('parts.section_latest_news')
    {{-- @include('partials.sidebar') --}}
@endsection

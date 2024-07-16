@extends('layouts.index')

@section('content')
<main>
    <div class="container" style="margin-top: 120px;">
        <div class="row">
            <div class="col-md-12">
                <h1 class="my-4">
                    {{ $page->title }}
                </h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 bg-white pt-3 mb-3" style="height: fit-content; border-radius: 10px; -webkit-box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.15);">
                <div class="data-wrapper">
                    <div class="row mx-1">
                        {!! $page->content !!} 
                    </div>
                </div>
            </div>
            @include('parts.sidebar')
        </div>
    </div>
</main>

@endsection
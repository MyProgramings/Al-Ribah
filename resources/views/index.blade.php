@extends('layouts.index')

@section('content')
    <main>
        <div class="container" style="margin-top: 120px;">
            <div class="row">
                <div class="col-md-12">
                    <p class="h4 my-4">
                        {{ $title }}
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div class="data-wrapper">
                        <div class="row">
                            @includewhen(count($posts) == 0, 'alerts.empty', ['msg' => 'لا توجد منشورات'])
                            @include('data')
                        </div>
                    </div>
            
                    <div class="row text-center" style="padding:20px;">
                        <button class="btn btn-success load-more-data">Load More Data...</button>
                    </div>
            
                    <div class="auto-load text-center" style="display: none;">
                        <div class="d-flex justify-content-center">
                            <div class="spinner-border" role="status">
                                <span>Loading...</span>
                            </div>
                        </div>
                    </div>
                </div>
                @include('partials.sidebar')
            </div>
        </div>
    </main>


@endsection

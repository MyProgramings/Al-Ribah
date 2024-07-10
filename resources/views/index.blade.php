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
                            <!-- Pagination -->
                            <ul class="pagination mb-4">
                                {{ $posts->links() }}
                            </ul>
                        </div>
                    </div>
                </div>
                @include('partials.sidebar')
            </div>
        </div>
    </main>


@endsection

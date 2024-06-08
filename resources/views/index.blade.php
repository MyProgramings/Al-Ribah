@extends('layouts.main')

@section('content')
    <div class="col-md-12">
        <p class="h4 my-4">
            {{ $title }}
        </p>
    </div>

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
@endsection
@section('script')
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script>
        var ENDPOINT = "{{ route('posts.index') }}";
        var page = 1;

        $(".load-more-data").click(function() {
            page++;
            LoadMore(page);
        });

        function LoadMore(page) {
            $.ajax({
                    url: ENDPOINT + "?page=" + page,
                    datatype: "html",
                    type: "get",
                    beforeSend: function() {
                        $('.auto-load').show();
                    }
                })
                .done(function(response) {
                    console.log(response);
                    if (response.html == '') {
                        $('.auto-load').html("End :(");
                        return;
                    }
                    $('.auto-load').hide();
                    $("#data-wrapper").append("<div class='row'>" + response.html + "</div>");
                })
                .fail(function(jqXHR, ajaxOptions, thrownError) {
                    console.log('Server error occured');
                });
        }
    </script>
@endsection

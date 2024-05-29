<div class="header-news">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="carousel-news">
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1">1</button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                                aria-label="Slide 2">2</button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                                aria-label="Slide 3">3</button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                                aria-label="Slide 4">4</button>
                        </div>
                        <div class="carousel-inner">
                            @includewhen(count($posts) == 0, 'alerts.empty', ['msg' => 'لا توجد منشورات'])
                            @foreach ($posts as $post)
                                <div class="carousel-item active">
                                    <a href="{{ route('post.show', $post->slug) }}">
                                        <img src="{{ asset('/storage/images/' . $post->image_path) }}"
                                            class="d-block w-100" alt="...">
                                        <div class="carousel-text">
                                            <h3>{{ $post->title }}</h3>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="header-articles">
                    @includewhen(count($posts) == 0, 'alerts.empty', ['msg' => 'لا توجد منشورات'])
                    @foreach ($posts as $post)
                        <a href="{{ route('post.show', $post->slug) }}" class="article-link">
                            <div class="row">
                                <div class="col-5">
                                    <img src="{{ asset('/storage/images/' . $post->image_path) }}" alt="...">
                                </div>
                                <div class="col-7">
                                    <div class="article-text">
                                        <span class="article-category">
                                            {{ __('مشاريع') }}
                                        </span>
                                        <h5 class="article-title">{{ $post->title }}</h5>
                                    </div>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

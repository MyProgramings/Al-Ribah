<section class="videos">
    <div class="container">
        <h2 class="section-title dark-color">
            الشركاء
        </h2>
        <div class="swiper">
            <div class="swiper-wrapper">
                @includewhen(count($partners) == 0, 'alerts.empty', ['msg' => 'لا يوجد شركاء'])
                @foreach ($partners as $partner)
                    <div class="swiper-slide">
                        <a href="article.html" class="article-link">
                            <div class="slide-img">
                                <img src="{{ asset('images/companies/' . $partner->image) }}" alt="...">
                                {{-- <i class="fa-solid fa-play"></i> --}}
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>

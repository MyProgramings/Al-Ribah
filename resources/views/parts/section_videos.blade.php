<section class="videos">
    <div class="container">
        <h2 class="section-title " style="color: #114f39">
            الشركاء
        </h2>
        <div class="swiper">
            <div class="swiper-wrapper">
                @includewhen(count($partners) == 0, 'alerts.empty', ['msg' => 'لا يوجد شركاء'])
                @foreach ($partners as $partner)
                    <div class="swiper-slide">
                            <div class="slide-img">
                                <img src="{{ asset('/storage/images/companies/' . $partner->image) }}" alt="...">
                                {{-- <i class="fa-solid fa-play"></i> --}}
                            </div>
                    </div>
                @endforeach
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>

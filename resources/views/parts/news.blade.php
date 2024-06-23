<div class="header-news">
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <div class="header-articles">
                <div class="header-articles">
                    <h1 style="font-size: 80px; font-weight: bold; color: #114f39;">جمعية الربة</h1>
                    <h1 style="font-size: 80px; font-weight: bold; color: #114f39;">التعاونية</h1>
                    <h1 style="font-size: 80px; font-weight: bold; color: #114f39;">الزراعية</h1><br>
                    <span>أوجدت في عام 2004/01/13</span><br>
                    <span>نوع الجمعية: منظمات مجتمع مدني</span><br>
                    <span>مسجلة ومرخصة من مكتب وزارة الشؤون الإجتماعية بالوادي برقم (ز2004/15).</span>
                </div>
          </div>
        </div>
        <div class="col-lg-7">
          <div class="header-articles header-articles-image">
                <div class="header-articles header-articles-image">
                    <img src="{{ asset('images/readys.png') }}" alt="...">
                </div>
          </div>
        </div>
      </div>
        {{-- <div class="row">
            <div class="col-lg-7">
                <div class="carousel-news">
                  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1">1</button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2">2</button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3">3</button>
                    </div>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <a href="article.html">
                          <img src="{{ asset('images/co.png') }}" class="d-block w-100" alt="...">
                          <div class="carousel-text">
                            <h3>تحسين و تطوير نظام الري المزدوج لزراعة مساحات من أراضي.</h3>
                          </div>
                        </a>
                      </div>
                      <div class="carousel-item">
                        <a href="article.html">
                          <img src="{{ asset('images/co1.png') }}" class="d-block w-100" alt="...">
                          <div class="carousel-text">
                            <h3>السعي الستثمار مساهمات االعضاء بما يعود بالنفع عليهم <br>وعلى الجمعية.</h3>
                          </div>
                        </a>
                      </div>
                      <div class="carousel-item">
                        <a href="article.html">
                          <img src="{{ asset('images/co.png') }}" class="d-block w-100" alt="...">
                          <div class="carousel-text">
                            <h3>تنظيم اخذ الطين من الواحات (الجروب) وذلك للحفاظ على<br>المنسوب المطلوب لجريان السيول.</h3>
                          </div>
                        </a>
                      </div>
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
        </div> --}}
    </div>
</div>

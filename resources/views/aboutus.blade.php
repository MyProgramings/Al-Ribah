@extends('layouts.index')

@section('content')
    <header>
    </header>
    <main style="background-image: url('images/Untitled-2.webp');height: 650px;
  /* background-attachment: fixed;   */
  background-size: cover;">
      <div class="container" style="margin-top: 40px;">
        <div class="row">
          <div class="col-md-12">
            <div class="search-form">
              <div class="about-section">
                <h1>جمعية الربّة التعاونية الزراعية/شبام</h1>
                <p>يحيط بشبام التاريخية اراضي زراعية (جروب) تقدر مساحتها 160 فدان من الجهات الشرقية والشمالية والغربية تروى بمياه 
                  الفيضانات وقد نشأ الاجداد نظام بديع للري يمتد من سد الموزع (5كم) غربي المدينة ويمر بالساقية الرئيسية (ساقية البلاد) ثم سواقي 
                  فرعية تتفرع الى سواقي (قنوات) فرعية صغيرة لينساب الماء الى الجروب المحاذية للمدينة مزروعة بأشجار النخيل والتي كانت 
                  تمد السكان بالتمور.</p>
              </div><br>
              <div class="about-section">
                <p>في الماضي القريب اهملت الاراضي الزراعية بسبب العوامل السياسية والاقتصادية ومن هذا المنطلق أوجدت جمعية الربّة عام 
                  2004 لحماية الاراضي الزراعية من الاندثار والعبث بها والحفاظ على الموروث الزراعي لمدينة شبام التاريخية وكذلك الاستفادة 
                  منها في تحسين المستوى المعيشي.</p>
              </div>
            </div>
          </div>
        </div>
        {{-- <div class="row">
          <div class="col-md-8">
            <div class="search-line">
              <span>أفضل 50 نتيجة</span>
              <div class="ranking">
                <span>الترتيب:</span>
                <select name="ranking_by" id="ranking_by">
                  <option value="date">التاريخ</option>
                  <option value="related">الصلة</option>
                </select>
              </div>
            </div>
            <hr>
            <div class="search-articles" id="search-articles">
              <div class="article-card">
                <a href="article.html" class="article-link">
                  <div class="row">
                    <div class="col-md-4">
                      <img src="./images/picture-12.jpg" alt="...">
                    </div>
                    <div class="col-md-8">
                      <h4>لوريم إيبسوم هو ببساطة نص شكلي</h4>
                      <p>لوريم إيبسوم هو ببساطة نص شكلي (بمعنى أن 
                        الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع ودور النشر.
                            كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر 
                        عندما قامت مطبعة</p>
                      <time datetime="01/01/2023">الأحد، 01/01/2023</time>
                    </div>
                  </div>
                </a>
              </div>
              <div class="article-card">
                <a href="article.html" class="article-link">
                  <div class="row">
                    <div class="col-md-4">
                      <img src="./images/picture-15.jpg" alt="...">
                    </div>
                    <div class="col-md-8">
                      <h4>لوريم إيبسوم هو ببساطة نص شكلي</h4>
                      <p>لوريم إيبسوم هو ببساطة نص شكلي (بمعنى أن 
                        الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع ودور النشر.
                            كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر 
                        عندما قامت مطبعة</p>
                      <time datetime="01/01/2023">الأحد، 01/01/2023</time>
                    </div>
                  </div>
                </a>
              </div>
              <div class="article-card">
                <a href="article.html" class="article-link">
                  <div class="row">
                    <div class="col-md-4">
                      <img src="./images/picture-16.jpg" alt="...">
                    </div>
                    <div class="col-md-8">
                      <h4>لوريم إيبسوم هو ببساطة نص شكلي</h4>
                      <p>لوريم إيبسوم هو ببساطة نص شكلي (بمعنى أن 
                        الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع ودور النشر.
                            كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر 
                        عندما قامت مطبعة</p>
                      <time datetime="01/01/2023">الأحد، 01/01/2023</time>
                    </div>
                  </div>
                </a>
              </div>
              <div class="article-card">
                <a href="article.html" class="article-link">
                  <div class="row">
                    <div class="col-md-4">
                      <img src="./images/picture-1.jpg" alt="...">
                    </div>
                    <div class="col-md-8">
                      <h4>لوريم إيبسوم هو ببساطة نص شكلي</h4>
                      <p>لوريم إيبسوم هو ببساطة نص شكلي (بمعنى أن 
                        الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع ودور النشر.
                            كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر 
                        عندما قامت مطبعة</p>
                      <time datetime="01/01/2023">الأحد، 01/01/2023</time>
                    </div>
                  </div>
                </a>
              </div>
              <div class="article-card">
                <a href="article.html" class="article-link">
                  <div class="row">
                    <div class="col-md-4">
                      <img src="./images/picture-14.jpg" alt="...">
                    </div>
                    <div class="col-md-8">
                      <h4>لوريم إيبسوم هو ببساطة نص شكلي</h4>
                      <p>لوريم إيبسوم هو ببساطة نص شكلي (بمعنى أن 
                        الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع ودور النشر.
                            كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر 
                        عندما قامت مطبعة</p>
                      <time datetime="01/01/2023">الأحد، 01/01/2023</time>
                    </div>
                  </div>
                </a>
              </div>
              <div class="article-card">
                <a href="article.html" class="article-link">
                  <div class="row">
                    <div class="col-md-4">
                      <img src="./images/picture-11.jpg" alt="...">
                    </div>
                    <div class="col-md-8">
                      <h4>لوريم إيبسوم هو ببساطة نص شكلي</h4>
                      <p>لوريم إيبسوم هو ببساطة نص شكلي (بمعنى أن 
                        الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع ودور النشر.
                            كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر 
                        عندما قامت مطبعة</p>
                      <time datetime="01/01/2023">الأحد، 01/01/2023</time>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-4">

          </div>
        </div>
        <div class="more-resulte text-center">
          <a href="#" class="btn button">المزيد من النتائج</a>
        </div> --}}
      </div>
    </main>
@endsection
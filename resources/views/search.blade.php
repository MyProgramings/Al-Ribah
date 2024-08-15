@extends('layouts.index')

@section('content')
    <header>
    </header>
    <main>
      <div class="container" style="margin-top: 40px;">
        <div class="row">
          <div class="col-md-8">
            <div class="search-form">
              <form action="./serach.html">
                <input type="text" placeholder="أبحث هنا ..." required>
                <button type="submit" class="button">بحث</button>
              </form>
            </div>
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
            </div>
          </div>
          <div class="col-md-4">

          </div>
        </div>
        <div class="more-resulte text-center">
          <a href="#" class="btn button">المزيد من النتائج</a>
        </div>
        <hr>
      </div>
    </main>
@endsection
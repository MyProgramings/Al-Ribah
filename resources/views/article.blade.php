@extends('layouts.index')
@section('content')
    <main>
        <div class="article-header">
            <div class="container">
                <div class="header-category">
                    <span class="me-1">تكنولوجيا</span> | <span class="ms-1">ميكروسوفت</span>
                </div>
                <div class="header-title">
                    <h2>{{$post->title}}</h2>
                </div>
            </div>
        </div>
        <div class="article-main">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="article-img">
                            <img src="{{ asset('/storage/images/'.$post->image_path) }}" alt="...">
                        </div>
                        <div class="article-subtitle">
                            <span>{{$post->title}}</span>
                        </div>
                        <div class="article-datetime">
                            <time datetime="01-01-2023">{{$post->created_at->locale('ar')->dayName}} {{$post->created_at->format('d/m/Y')}}</time>
                        </div>
                        <div class="article-body">
                            <article>
                                <p class="lh-lg">{!! $post->body !!}</p>
                            </article>
                            <section class="suggested-stories">
                                <h2 class="section-title">
                                    القصص المقترحة
                                </h2>
                                <div class="stories">
                                    <a href="#" class="article-link">
                                        <div class="story-card mt-5">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <img src="{{ asset('images/picture-16.jpg') }}" alt="...">
                                                </div>
                                                <div class="col-sm-8">
                                                    <p>لوريم إيبسوم هو ببساطة نص شكلي</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="article-link">
                                        <div class="story-card mt-5">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <img src="{{ asset('images/picture-13.jpg') }}" alt="...">
                                                </div>
                                                <div class="col-sm-8">
                                                    <p>لوريم إيبسوم هو ببساطة نص شكلي</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="article-link">
                                        <div class="story-card mt-5">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <img src="{{ asset('images/picture-11.jpg') }}" alt="...">
                                                </div>
                                                <div class="col-sm-8">
                                                    <p>لوريم إيبسوم هو ببساطة نص شكلي</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </section>
                            <article>
                                <p>لوريم إيبسوم هو ببساطة نص شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى ويُستخدم في صناعات
                                    المطابع ودور النشر.</p>
                                <p>
                                    كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة
                                    مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص، لتكوّن كتيّب بمثابة دليل أو مرجع
                                    شكلي لهذه الأحرف. خمسة قرون من الزمن لم تقضي على هذا النص، بل انه حتى صار مستخدماً
                                    وبشكله الأصلي في الطباعة والتنضيد الإلكتروني.

                                </p>
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/U3axpYKzyos"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                                <h3>عنوان ثاني</h3>
                                <p>لوريم إيبسوم هو ببساطة نص شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى ويُستخدم في صناعات
                                    المطابع ودور النشر.</p>
                                <p>
                                    كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة
                                    مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص، لتكوّن كتيّب بمثابة دليل أو مرجع
                                    شكلي لهذه الأحرف. خمسة قرون من الزمن لم تقضي على هذا النص، بل انه حتى صار مستخدماً
                                    وبشكله الأصلي في الطباعة والتنضيد الإلكتروني.

                                </p>
                                <p>
                                    انتشر بشكل كبير في ستينيّات هذا القرن مع إصدار رقائق "ليتراسيت" البلاستيكية تحوي مقاطع
                                    من هذا النص، وعاد لينتشر مرة أخرى مؤخراَ مع ظهور برامج النشر الإلكتروني مثل "ألدوس بايج
                                    مايكر" والتي حوت أيضاً على نسخ من نص لوريم إيبسوم.

                                </p>
                                <span class="keyword me-3">لوريوم</span>
                                <span class="keyword me-3">حسوب</span>
                                <span class="keyword me-3">أبسويوم</span>
                            </article>
                        </div>
                        <section class="comments mt-5">
                            <h2 class="section-title">
                                التعليقات
                            </h2>
                            <form action="./article.html">
                                <textarea name="comment" id="comment" class="comment-textarea" placeholder="أكتب تعليقًا هنا ..."></textarea>
                                <button type="submit" class="button">نشر</button>
                            </form>
                            <hr>
                            <div class="comment-cards" id="comment-cards">
                                <div class="comment-card">
                                    <div class="row">
                                        <div class="col-lg-2 col-3">
                                            <div class="user-photo">
                                                <img src="{{ asset('images/user_img/user_4.jpg') }}" alt="...">
                                            </div>
                                        </div>
                                        <div class="col-lg-10 col-9">
                                            <div class="comment-text">
                                                <span class="user-name">محمد الأحمد</span>
                                                <p>
                                                    لوريم إيبسوم هو ببساطة نص شكلي بمعنى أن الغاية هي الشكل
                                                    وليس المحتوى) ويُستخدم في صناعات المطابع ودور النشر. كان لوريم إيبسوم
                                                    ولايزال
                                                    المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="comment-card">
                                    <div class="row">
                                        <div class="col-lg-2 col-3">
                                            <div class="user-photo">
                                                <img src="{{ asset('images/user_img/user_2.jpg') }}" alt="...">
                                            </div>
                                        </div>
                                        <div class="col-lg-10 col-9">
                                            <div class="comment-text">
                                                <span class="user-name">محمد الأحمد</span>
                                                <p>
                                                    لوريم إيبسوم هو ببساطة نص شكلي بمعنى أن الغاية هي الشكل
                                                    وليس المحتوى) ويُستخدم في صناعات المطابع ودور النشر. كان لوريم إيبسوم
                                                    ولايزال
                                                    المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr class="mt-5 mb-5">
                        </section>
                        <section class="related-articles">
                            <h2 class="section-title">
                                مقالات ذات صلة
                            </h2>
                            <div class="row">
                                <div class="col-sm-4">
                                    <a href="article.html" class="article-link">
                                        <img src="{{ asset('images/picture-12.jpg') }}" alt="...">
                                        <div class="article-text mt-3">
                                            <span class="article-category">
                                                اقتصاد
                                            </span>
                                            <h5 class="article-title">
                                                لوريم إيبسوم هو ببساطة نص شكلي بمعنى أن الغاية هي الشكل وليس المحتوى
                                                ويُستخدم
                                            </h5>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-sm-4">
                                    <a href="article.html" class="article-link">
                                        <img src="{{ asset('images/picture-10.jpg') }}" alt="...">
                                        <div class="article-text mt-3">
                                            <span class="article-category">
                                                اقتصاد
                                            </span>
                                            <h5 class="article-title">
                                                لوريم إيبسوم هو ببساطة نص شكلي بمعنى أن الغاية هي الشكل وليس المحتوى
                                                ويُستخدم
                                            </h5>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-sm-4">
                                    <a href="article.html" class="article-link">
                                        <img src="{{ asset('images/picture-15.jpg') }}" alt="...">
                                        <div class="article-text mt-3">
                                            <span class="article-category">
                                                اقتصاد
                                            </span>
                                            <h5 class="article-title">
                                                لوريم إيبسوم هو ببساطة نص شكلي بمعنى أن الغاية هي الشكل وليس المحتوى
                                                ويُستخدم
                                            </h5>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="text-center">
                                <a href="#" class="btn button">
                                    المزيد
                                </a>
                            </div>
                            <hr class="mt-4 mb-5">
                        </section>
                    </div>
                    <div class="col-md-4">
                        <div class="most-read">
                            <h2>الأكثر قراءة</h2>
                            <a href="#" class="article-link">
                                <div class="most-read-article">
                                    <img src="{{ asset('images/picture-13.jpg') }}" alt="...">
                                    <div class="most-read-text">
                                        <h4 class="article-title">
                                            لوريوم أيبسوم: البيس اعاس اللي شكل لو
                                        </h4>
                                        <time datetime="01/01/2023">الأحد، 01/01/2023</time>
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="article-link">
                                <div class="most-read-article">
                                    <img src="{{ asset('images/picture-11.jpg') }}" alt="...">
                                    <div class="most-read-text">
                                        <h4 class="article-title">
                                            لوريوم أيبسوم: البيس اعاس اللي شكل لو
                                        </h4>
                                        <time datetime="01/01/2023">الأحد، 01/01/2023</time>
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="article-link">
                                <div class="most-read-article">
                                    <img src="{{ asset('images/picture-15.jpg') }}" alt="...">
                                    <div class="most-read-text">
                                        <h4 class="article-title">
                                            لوريوم أيبسوم: البيس اعاس اللي شكل لو
                                        </h4>
                                        <time datetime="01/01/2023">الأحد، 01/01/2023</time>
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="article-link">
                                <div class="most-read-article">
                                    <img src="{{ asset('images/picture-12.jpg') }}" alt="...">
                                    <div class="most-read-text">
                                        <h4 class="article-title">
                                            لوريوم أيبسوم: البيس اعاس اللي شكل لو
                                        </h4>
                                        <time datetime="01/01/2023">الأحد، 01/01/2023</time>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

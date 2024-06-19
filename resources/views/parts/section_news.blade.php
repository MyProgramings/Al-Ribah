<section class="news">
<div class="container">
    <h2 class="section-title">
        مشاريع وأنشطة الجمعية
    </h2>
    <div class="row">
        @includewhen(count($posts) == 0, 'alerts.empty', ['msg' => 'لا توجد منشورات'])
        @foreach ($posts as $post)
        @if ($post->type == 1)
            <div class="col-lg-3 col-md-4 col-sm-6 mt-4">
                <a href="./article.html" class="article-link">
                    <img src="{{ asset('/storage/images/' . $post->image_path) }}" alt="...">
                    <div class="article-text mt-3">
                        <span class="article-category">
                            {{ $post->category->title }}
                        </span>
                        <h5 class="article-title">{!! Str::limit($post->title, 55, '...') !!}</h5>
                    </div>
                </a>
            </div>
        @endif
        @endforeach
    </div>
    <div class="text-center mt-5">
        <button type="button" wire:click="load()" wire:loading.class="d-none" wire:target="load" class="btn button">
            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="14px" height="19px"
                viewBox="0 0 24 30" style="enable-background:new 0 0 50 50;" xml:space="preserve">
                <rect style="fill: #114f39;" x="0" y="13" width="4" height="5" fill="#333">
                    <animate attributeName="height" attributeType="XML" values="5;21;5" begin="0s"
                        dur="0.6s" repeatCount="indefinite" />
                    <animate attributeName="y" attributeType="XML" values="13; 5; 13" begin="0s"
                        dur="0.6s" repeatCount="indefinite" />
                </rect>
                <rect style="fill: #114f39;" x="10" y="13" width="4" height="5" fill="#333">
                    <animate attributeName="height" attributeType="XML" values="5;21;5" begin="0.15s"
                        dur="0.6s" repeatCount="indefinite" />
                    <animate attributeName="y" attributeType="XML" values="13; 5; 13" begin="0.15s"
                        dur="0.6s" repeatCount="indefinite" />
                </rect>
                <rect style="fill: #114f39;" x="20" y="13" width="4" height="5" fill="#333">
                    <animate attributeName="height" attributeType="XML" values="5;21;5" begin="0.3s"
                        dur="0.6s" repeatCount="indefinite" />
                    <animate attributeName="y" attributeType="XML" values="13; 5; 13" begin="0.3s"
                        dur="0.6s" repeatCount="indefinite" />
                </rect>
            </svg>
            المزيد
        </button>
    </div>
</div>
</section>
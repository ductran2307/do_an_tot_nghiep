<div class="blog-top">
    <div class="title" style="font-size: 20px;">Bài viết nổi bật</div>
    {{-- <div class="top">
        <div class="top__avatar">
            <a href="" title="" class="image cover">
                <img data-src="" style="width:100%" class="lazyload" alt="" src="{{ url('frontend/images/shop/dongho.jpg') }}">
            </a>
        </div>
        <a href="" title="" class="top__title" style="font-size: 20px; color: black;">Đây là tiêu đề bài viết</a>
    </div> --}}

    <div class="bot" style=" display: grid;grid-template-columns: repeat(2, 1fr);gap: 20px;padding: 10px; margin-left: -10px;">
        
            @foreach ($articles as $article )
                <div class="item" style="  border: 1px solid #eee;border-radius: 6px;padding: 10px;text-align: center;">
                    <a href="{{ route('get.blog.detail', $article->a_slug.'-'.$article->id ) }}" title="{{$article->a_name}}" class="image cover">
                        <img data-src="" style="  width: 100%;height: auto;border-radius: 6px;" class="lazyload" alt="" src="{{ pare_url_file($article->a_avatar)}}">
                        <p>{{$article->a_name}}</p>
                    </a>
                </div>
            @endforeach

    </div>
</div>
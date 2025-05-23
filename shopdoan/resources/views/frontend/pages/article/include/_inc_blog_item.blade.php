<div class="blog-item" style="display: flex; gap: 10px; margin-bottom: 20px; margin-top: 20px;">
    <div class="avatar">
        <a href="{{ route('get.blog.detail', $article->a_slug.'-'.$article->id ) }}" title="{{ $article->a_name }}" class="image cover">
            <img  style="width: 250px; height: 200px;"data-src="" class="lazyload" alt="" src="{{ pare_url_file($article->a_avatar)}}">
        </a>
    </div>
    <div class="info">
        <a href="{{ route('get.blog.detail', $article->a_slug.'-'.$article->id ) }}" title="{{ $article->a_name }}">
           {{ $article->a_name }}
        </a>
        <p>
           {{ $article->a_description }}
        </p>
    </div>
</div>

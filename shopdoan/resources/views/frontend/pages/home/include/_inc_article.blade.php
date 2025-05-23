<style>
.article-item a img{
    width: 100%;
    height: 250px;
}
.date-time{
    margin-top: 5px;
}
</style>
@if (isset($article))
    <div class="article-item">
        <a href="{{ route('get.blog.detail',$article->a_slug.'-'.$article->id) }}" title="" class="avatar image contain">
            <img alt="" src="{{ pare_url_file($article->a_avatar)}}" class="">
        </a>
          <div class="content">
            <div class="date-time"><i class="fa fa-calendar"></i><span>{{$article->created_at}}</span></div>
            <h3>{{$article->a_name}}</h3>
            <p >{{$article->a_description}}</p>
        </div>
       
    </div>
@endif


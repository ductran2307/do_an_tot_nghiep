@if (isset($articles))
    <div class="top-question">
        <div class="title" style="font-size: 20px;">BÀI VIẾT HOT</div>
        <ul style="margin-left: -40px;">
            @foreach ($articles as $key=> $item)
            <li class="list-item">
                <span class="stt">{{ $key+1 }}</span>
                <a href="{{ route('get.blog.detail', $item->a_slug.'-'.$item->id ) }}" class="list-link">{{$item->a_name}}</a>
            </li>
            @endforeach
        </ul>
    </div>
@endif         

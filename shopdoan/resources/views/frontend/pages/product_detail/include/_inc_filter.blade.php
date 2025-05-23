<style>
    .filter li a.active{
        font-weight: bold;
    }
</style>
<div class="filter" style="display: flex; gap: 10px;">
    <div>Lọc theo:</div>
    <div style="margir-left:-20px">
        <ul style="display: flex; gap: 10px; padding: 0 !important;">
            <li><a href="{{ route('get.product.rating_list',$product->pro_slug.'-'.$product->id) }}" class="{{Request::get('s')? '':'active'}}">Tất cả</a></li>
            @for ($i = 5; $i >= 1; $i--)
                <li><a class="{{Request::get('s')==$i? 'active':''}}"
                    href="{{ request()->fullUrlWithQuery(['s' => $i]) }}">{{ $i }} sao</a></li>
            @endfor
        </ul>
    </div>
</div>

@extends('welcome')
@section('top-content')
<div class="movie-list-index home-v2">
    <h1 class="header-list-index">
        <span class="title-list-index">{{$title}}</span>
    </h1>
    <!-- phia tren + phia duoi ben trai -->
    <ul class="last-film-box" id="movie-last-movie">
        @if ($listflim->count() == 0)
            <h1 class="text-center text-danger">Không tìm Thấy Phim Phù Hợp</h1>
        @else
        @foreach ($listflim as $item)
        <li>
            <a class="movie-item m-block" title="{{$item->subname}}" href="{{Route('page.inforpage',['id' => $item->id])}}">
                <div class="block-wrapper">
                    <div class="movie-thumbnail ratio-box ratio-3_4">
                        <div class="public-film-item-thumb ratio-content" style="background-image:url('{{$item->image}}')"></div>
                    </div>
                    <div class="movie-meta">
                        <div class="movie-title-1">{{$item->name}}</div>
                        <span class="fbcom-left">89</span><span class="viewed-right">{{$item->total_views}}</span><span class="ribbon">10/{{$item->total_chap}} tập</span>
                    </div>
                </div>
            </a>
        </li>
        @endforeach
 
        @endif
       
    </ul>
    {{-- <div class="clear"></div>
    <ul class="pagination pagination-lg">
        <li class="active"><a rel="nofollow">1</a></li>
        <li><a href="/the-loai/doi-thuong-38/2.html">2</a></li>
        <li><a href="/the-loai/doi-thuong-38/3.html">3</a></li>
        <li><a href="/the-loai/doi-thuong-38/4.html">4</a></li>
        <li><a href="/the-loai/doi-thuong-38/5.html">5</a></li>
        <li><a href="/the-loai/doi-thuong-38/16.html"><b>»</b></a></li>
    </ul> --}}
    <div class="clear"></div>
</div>
@endsection
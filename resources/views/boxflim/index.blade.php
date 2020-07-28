@extends('welcome')
@section('top-content')
<div class="clear"></div>
@if($boxflim->count() == 0)
    <div>
        <h3 class="text-center Bold text-white">Bạn chưa thêm phim vào tủ</h3>
    </div>
@else    
        @foreach ($boxflim as $item)
                <li>                   
                    <div cclass="movie-item m-block" title="{{$item->subname}}" href="{{Route('page.inforpage',['id' => $item->flim_id])}}">
                        <div class="block-wrapper">
                            <div class="movie-thumbnail ratio-box ratio-3_4">
                                <div class="public-film-item-thumb ratio-content" style="background-image:url('{{$item->image}}')"></div>
                            </div>
                            <div class="movie-meta">
                                <div class="movie-title-1">{{$item->name}}</div>
                                <span class="fbcom-left">89</span>
                                <span class="viewed-right">{{$item->total_views}}</span>
                                <span class="ribbon">10/{{$item->total_chap}} tập</span>
                            </div>
                                
                        </div>                       
                    <div class="del-list">
                        <a onclick="return unfavo({{$item->id}})" href="{{route('boxflim.delete',['id' =>$item->id])}}" title="Bỏ phim"><img src="https://img.icons8.com/fluent/28/000000/close-window.png" alt="Xóa"></a>
                    </div>
                    </div>
                </li>
        @endforeach 
@endif
<div class="clear"></div>  
     
@endsection
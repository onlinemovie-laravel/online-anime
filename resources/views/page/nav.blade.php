<nav>
    <div class="container">
        <ul id="mega-menu-1">
            <li><a href="/">Trang Chủ</a></li>
            <li > 
                <a class="nav-link dropdown-toggle" href="#" id="category" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Thể loại</a>
                <div class="dropdown-menu" aria-labelledby="category">
                    <div class="row text-center" >
                        @foreach ($listcategory   as $item)
                        <a class="dropdown-item text-danger col-md-2 " href="{{Route('page.pagecate',['name' => $item->name])}}">{{ str_replace('-',' ',$item->name)}}</a>
                        @endforeach
                    </div>
                </div>
                
            </li>
            <li>
                <a class="nav-link dropdown-toggle" href="#" id="status" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >Trạng Thái</a>
                <div class="dropdown-menu" aria-labelledby="status">
                    <a class="dropdown-item text-danger" href="{{Route('page.statuspage',['status' => 0])}}">Hoàn thành</a>
                    <a class="dropdown-item text-danger" href="{{Route('page.statuspage',['status' => 1])}}">Đang tiến hành</a>
                </div>
            </li>
            <li>
                <a class="nav-link dropdown-toggle" href="#" id="moreview" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Xem Nhiều</a>
                <div class="dropdown-menu" aria-labelledby="moreview">
                    <a class="dropdown-item text-danger" href="#">Theo BỘ</a>
                    <a class="dropdown-item text-danger" href="#">Theo Tập</a>
                </div>
            </li>
            <li>
                <a class="nav-link dropdown-toggle" href="#" id="morecomt" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Bình luận nhiều</a>                
                {{-- <div class="dropdown-menu" aria-labelledby="morecomt">
                    <a class="dropdown-item" href="./tim-nang-cao/?status=&season=4&year=2019&sort=comment">Mùa này</a>                   
                    <a class="dropdown-item" href="./tim-nang-cao/?status=&season=7&year=2018&sort=comment">Mùa trước</a>                 
                    <a class="dropdown-item" href="./tim-nang-cao/?status=&season=&year=2019&sort=comment">Năm này</a>                   
                    <a class="dropdown-item" href="./tim-nang-cao/?status=&season=&year=2018&sort=comment">Năm trước</a>                   
                    <a class="dropdown-item" href="./tim-nang-cao/?status=&season=&year=&sort=comment">Tất cả</a>                    
                </div> --}}
            </li>
            <li>
                <a class="nav-link dropdown-toggle" href="#" id="year" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Năm</a>                
                <div class="dropdown-menu" aria-labelledby="year">
                    <div class="row text-center" >
                        @foreach ($listyear   as $item)
                        <a class="dropdown-item text-danger col-md-4  " href="{{Route('page.yearpage',['year' => $item->year])}}">{{ str_replace('-',' ',$item->year)}}</a>
                        @endforeach
                    </div>
                </div>
            </li>
            <li><a href="#">Hỏi-Đáp</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </div>
</nav>
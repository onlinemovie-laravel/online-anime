<nav>
    <div class="container">
        <ul id="mega-menu-1">
            <li><a href="/">Trang Chủ</a></li>
            <li > 
                <a class="nav-link dropdown-toggle" href="#" id="category" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Thể loại</a>
                <div class="dropdown-menu" aria-labelledby="category">
                        @foreach ($listcategory   as $item)
                        <a class="dropdown-item text-danger" href="{{Route('cate')}}">{{ str_replace('-',' ',$item->name)}}</a>
                        @endforeach
                </div>
                
            </li>
            <li>
                <a class="nav-link dropdown-toggle" href="#" id="status" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >Trạng Thái</a>
                <div class="dropdown-menu" aria-labelledby="status">
                    <a class="dropdown-item" href="./tim-nang-cao/?status=complete&season=&year=&sort=popular">Hoàn thành</a>
                    <a class="dropdown-item" href="./tim-nang-cao/?status=ongoing&season=&year=&sort=popular">Đang tiến hành</a>
                </div>
            </li>
            <li>
                <a class="nav-link dropdown-toggle" href="#" id="moreview" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Xem Nhiều</a>
                <div class="dropdown-menu" aria-labelledby="moreview">
                    <a class="dropdown-item" href="./danh-sach/xem-nhieu-trong-ngay.html">Ngày</a>
                    <a class="dropdown-item" href="./danh-sach/xem-nhieu-trong-tuan.html">Tuần</a>
                    <a class="dropdown-item" href="./danh-sach/xem-nhieu-trong-thang.html">Tháng</a>
                    <a class="dropdown-item" href="./danh-sach/xem-nhieu-trong-mua.html">Mùa Này</a>
                    <a class="dropdown-item" href="./danh-sach/xem-nhieu-trong-nam.html">Năm Này</a>
                    <a class="dropdown-item" href="./tim-nang-cao/?status=&season=&year=2018&sort=popular">Năm Trước</a>
                    <a class="dropdown-item" href="./tim-nang-cao/?status=&season=7&year=2018&sort=popular">Mùa trước</a>
                    <a class="dropdown-item" href="./tim-nang-cao/?status=&season=&year=&sort=popular">Tất cả</a>
                </div>
            </li>
            <li>
                <a class="nav-link dropdown-toggle" href="#" id="morecomt" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Bình luận nhiều</a>                
                <div class="dropdown-menu" aria-labelledby="morecomt">
                    <a class="dropdown-item" href="./tim-nang-cao/?status=&season=4&year=2019&sort=comment">Mùa này</a>                   
                    <a class="dropdown-item" href="./tim-nang-cao/?status=&season=7&year=2018&sort=comment">Mùa trước</a>                 
                    <a class="dropdown-item" href="./tim-nang-cao/?status=&season=&year=2019&sort=comment">Năm này</a>                   
                    <a class="dropdown-item" href="./tim-nang-cao/?status=&season=&year=2018&sort=comment">Năm trước</a>                   
                    <a class="dropdown-item" href="./tim-nang-cao/?status=&season=&year=&sort=comment">Tất cả</a>                    
                </div>
            </li>
            <li>
                <a class="nav-link dropdown-toggle" href="#" id="year" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Năm</a>                
                <div class="dropdown-menu" aria-labelledby="year">
                    <a class="dropdown-item" href="tim-nang-cao/?status=&season=&year=2019&sort=popular">2019</a>
                    <a class="dropdown-item" href="tim-nang-cao/?status=&season=&year=2018&sort=popular">2018</a>
                    <a class="dropdown-item" href="tim-nang-cao/?status=&season=&year=2017&sort=popular">2017</a>
                    <a class="dropdown-item" href="tim-nang-cao/?status=&season=&year=2016&sort=popular">2016</a>
                    <a class="dropdown-item" href="tim-nang-cao/?status=&season=&year=2015&sort=popular">2015</a>
                    <a class="dropdown-item" href="tim-nang-cao/?status=&season=&year=2014&sort=popular">2014</a>
                    <a class="dropdown-item" href="tim-nang-cao/?status=&season=&year=2013&sort=popular">2013</a>
                    <a class="dropdown-item" href="tim-nang-cao/?status=&season=&year=2012&sort=popular">2012</a>
                    <a class="dropdown-item" href="tim-nang-cao/?status=&season=&year=2011&sort=popular">2011</a>
                    <a class="dropdown-item" href="tim-nang-cao/?status=&season=&year=2010&sort=popular">2010</a>
                </div>
            </li>
            <li><a href="https://anime47.com/huong-dan.html">Hỏi-Đáp</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </div>
</nav>
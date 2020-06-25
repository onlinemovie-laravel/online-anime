@extends('index')
@section('islogin')
    <div class="btn-group">
        <button type="button" class="btn btn-outline-primary btn-small" style="font-weight: bold;">Xin chào, hadec123</button><button type="button" class="btn btn btn-bdown dropdown-toggle btn-small" data-toggle="dropdown"><span class="caret"></span></button>
        <ul class="dropdown-menu" role="menu">
            <li><a href="members/home/hadec123.html">Thông tin tài khoản</a></li>
            <li class="divider"></li>
            <li><a class="fxlink-logout" href="members/logout.html">Thoát</a></li>
        </ul>
    </div>
    <a href="danh-sach/phim-cua-ban/1.html" type="button" class="btn btn-outline-danger btn-small">Tủ phim</a>
@endsection


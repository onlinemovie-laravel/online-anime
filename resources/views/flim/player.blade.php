@extends('welcome')
@section('top-content')

<div class="w-auto">
    <h2 class="m-2"><span class="text-warning">{{$title->name}}-EP:{{$item->chap}}</span></h2>
    <div class="movie-info">
        <div class="block-movie-info movie-info-box">
            <div class="tab-content" id="pills-tabContent" >
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    <script src="https://cdn.jwplayer.com/players/{{$item->content}}-YK2Wxq8L.js"></script>
                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <div itemscope itemtype="https://schema.org/VideoObject" title="This video can take to 10min for Processing">
                    <meta itemprop="thumbnailUrl" content="https://content.jwplatform.com/thumbs/{{$item->content}}-1280.jpg"/>
                    <meta itemprop="contentUrl" content="https://content.jwplatform.com/videos/{{$item->content}}-ZUxenC5W.mp4"/>
                    <div class="embed-responsive embed-responsive-16by9"> 
                        <iframe src="https://cdn.jwplayer.com/players/{{$item->content}}-eFvNO8QX.html"  frameborder="0" scrolling="auto"  style="position:absolute;" allowfullscreen title="This video can take to 10min for Processing"></iframe>
                    </div>
                </div>
                </div>
                <div class="tab-pane fade text-center text-danger" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                    <div class="embed-responsive embed-responsive-16by9"> 
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/mfgW7KVRZw0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                  <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">SV1</a>
                </li>
                <li class="nav-item" role="presentation">
                  <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">SV2</a>
                </li>
                <li class="nav-item" role="presentation">
                  <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">SV3</a>
                </li>
            </ul>
              
            <div class="clear"></div>
            {{-- <div class="user-action">
                <div class="btn-cs toggle-light" data-on="Bật đèn" data-off="Tắt đèn">
                    <i class="btn-cs-icon icon-light-sm"></i>
                    <div id="light-status">Tắt đèn</div>
                </div>
                <a class="btn-cs add-favorite" rel="nofollow" id="favorite" href="javascript:void(0)" onclick="return favo(1,4742)"><i class="btn-cs-icon icon-add-sm"></i><span class="btn-text">Lưu</span></a>
                <div class="btn-cs toggle-size" data-on="Thu nhỏ" data-off="Phóng to" title="Phóng to/Thu nhỏ">
                    <i class="btn-cs-icon icon-expand-sm"></i>
                    <span>
                        <div id="pttn">Phóng to</div>
                    </span>
                </div>
                <a class="btn-cs autoprev" rel="nofollow" onclick="nextEpisodeHand('');"><i class="btn-cs-icon icon-autoprev-sm"></i><span>Prev</span></a>
                <a class="btn-cs autonext" rel="nofollow" onclick="nextEpisodeHand('#-002/77973#');"><i class="btn-cs-icon icon-autonext-sm"></i><span>Next</span></a>
                <a class="btn-cs error-player" target="_blank" rel="nofollow" href="https://anime47.com/chuyen.php?url="><i class="btn-cs-icon icon-error-sm"></i><span>Link Nguồn</span></a>
                <div class="btn-cs show_hide" href="javascript:void(0)" onclick="TaiAnime(77972);"><i class="btn-cs-icon icon-download-sm"></i><span>Download</span></div>
                <a class="btn-cs add-favorite" rel="nofollow" id="favorite" href="javascript:void(0)" onclick="return danhdau(1,4742,77972)"><i class="btn-cs-icon icon-add-sm"></i><span class="btn-text">Đánh Dấu Ep Đang Xem</span></a>
                <div class="btn-cs show_hide" href="javascript:void(0)" onclick="PhanPhim();"><i class="btn-cs-icon icon-capture-frame"></i><span>Phần##</span></div>
                <div class="btn-cs" id="btn-toggle-capture" title="Chụp ảnh"><i class="btn-cs-icon icon-capture-frame"></i><span>Chụp ảnh</span></div>
                <!-- <div class="btn-cs" href="javascript:void(0)" >{film.server}</div> -->
            </div> --}}
            <div class="box-rating">
                <div class="slidingDiv" style="display:none">
                    <div style="text-align:center;z-index:8;line-height:1.5em;font-weight:bold;font-size:14px;color:#FFFFFF;font-weight:bold;">
                        <div id="taiphim">
                            <!-- xuat hien o day -->
                            <!-- ket thuc tai phim -->
                        </div>
                        <!-- Download -->
                    </div>
                </div>
                <div id="thongbao">
                    <div style="text-align: center;">
                        <h3 style="color: #5e9ca0;">Hãy lựa chọn Server phù hợp với đường tryền của các bạn .là server tổng hợp nên đôi khi có sự lẫn lộn giữa các fansub</h3>
                    </div>
                </div>
                <p>Các tập ở server Nhiều Nhóm bao gồm của các fansub : Tầm Nhìn Số, Vui Ghê, Naruto Sub</p>
            </div>
            <h2 class="text-warning m-2"><span>Danh Sach Tap</span></h2>
            <div class="block2 servers mt-3 bg-white ">
                <ul class="row m-1">
                    @if ($list->count()==0)
                        <h1 class="text-danger">Follow để nhận thông báo khi có tập mới nhất</h1>
                    @else
                        @foreach ($list as $rcmchap)
                        <a href="{{route('page.chapvideo',['id'=>$rcmchap->id])}}" class="text-white col-md-1 mx-1 btn btn-primary"><li class=" nonemarker text-center  ">{{$rcmchap->chap}}</li></a>
                        @endforeach
                    @endif
                    
                    {{-- <li class="col-md-3"><a href="#" title="002" group="1">002</a></li>
                    <li class="col-md-3"><a href="#" title="003" group="1">003</a></li>
                    <li class="col-md-3"><a href="#" title="004" group="1">004</a></li>
                    <li class="col-md-3"><a href="#" title="005" group="1">005</a></li>
                    <li class="col-md-3"><a href="#" title="006" group="1">006</a></li>
                    <li class="col-md-3"><a href="#" title="007" group="1">007</a></li>
                    <li class="col-md-3"><a href="#" title="008-009" group="1">008-009</a></li>
                    <li class="col-md-3"><a href="#" title="010" group="1">010</a></li>
                    <li class="col-md-3"><a href="#" title="011" group="1">011</a></li>
                    <li class="col-md-3"><a href="#" title="012" group="1">012</a></li>
                    <li class="col-md-3"><a href="#" title="013" group="1">013</a></li>
                    <li class="col-md-3 "><a href="#" title="014" group="1">014</a></li>
                    <li class="col-md-3"><a href="#" title="015" group="1">015</a></li>
                    <li class="col-md-3"><a href="#" title="016" group="1">016</a></li>
                    <li class="col-md-3"><a href="#" title="017" group="1">017</a></li>
                    <li class="col-md-3"><a href="#" title="018" group="1">018</a></li>
                    <li class="col-md-3"><a href="#" title="019" group="1">019</a></li>
                    <li class="col-md-3"><a href="#" title="020" group="1">020</a></li>
                    <li class="col-md-3"><a href="#" title="021" group="1">021</a></li>
                    <li class="col-md-3"><a href="#" title="022" group="1">022</a></li>
                    <li class="col-md-3"><a href="#" title="023" group="1">023</a></li>
                    <li class="col-md-3"><a href="#" title="024" group="1">024</a></li>
                    <li class="col-md-3"><a href="#" title="025" group="1">025</a></li>
                    <li class="col-md-3"><a href="#" title="026" group="1">026</a></li>
                    <li class="col-md-3"><a href="#" title="027" group="1">027</a></li>
                    <li class="nonemarker col-md-3"><a href="#" title="028" group="1">028</a></li>
                    <li class="col-md-3"><a href="#" title="029-030" group="1">029-030</a></li>
                    <li class="col-md-3"><a href="#" title="031" group="1">031</a></li>
                    <li class="col-md-3"><a href="#" title="032" group="1">032</a></li>
                    <li class="col-md-3"><a href="#" title="033" group="1">033</a></li>
                    <li class="col-md-3"><a href="#" title="034" group="1">034</a></li>
                    <li class="col-md-3"><a href="#" title="035" group="1">035</a></li>
                    <li class="col-md-3"><a href="#" title="036-037" group="1">036-037</a></li>
                    <li class="col-md-3"><a href="#" title="038" group="1">038</a></li>
                    <li class="col-md-3"><a href="#" title="039" group="1">039</a></li>
                    <li class="col-md-3"><a href="#" title="040-041" group="1">040-041</a></li>
                    <li class="col-md-3"><a href="#" title="042" group="1">042</a></li>
                    <li class="col-md-3"><a href="#" title="043" group="1">043</a></li>
                    <li class="col-md-3"><a href="#" title="044" group="1">044</a></li>
                    <li class="col-md-3"><a href="#" title="045" group="1">045</a></li>
                    <li class="col-md-3"><a href="#" title="046" group="1">046</a></li>
                    <li class="col-md-3"><a href="#" title="047" group="1">047</a></li>
                    <li class="col-md-3"><a href="#" title="048" group="1">048</a></li>
                    <li class="col-md-3"><a href="#" title="049" group="1">049</a></li>
                    <li class="col-md-3"><a href="#" title="050" group="1">050</a></li>
                    <li class="col-md-3"><a href="#" title="051-052" group="1">051-052</a></li>
                    <li class="col-md-3"><a href="#" title="053-054" group="1">053-054</a></li>
                    <li class="col-md-3"><a href="#" title="055" group="1">055</a></li>
                    <li class="col-md-3"><a href="#" title="056" group="1">056</a></li>
                    <li class="col-md-3"><a href="#" title="057-058" group="1">057-058</a></li>
                    <li class="col-md-3"><a href="#" title="059" group="1">059</a></li>
                    <li class="col-md-3"><a href="#" title="060" group="1">060</a></li>
                    <li class="col-md-3"><a href="#" title="061" group="1">061</a></li>
                    <li class="col-md-3"><a href="#" title="062" group="1">062</a></li>
                    <li class="col-md-3"><a href="#" title="063" group="1">063</a></li>
                    <li class="col-md-3"><a href="#" title="064-065" group="1">064-065</a></li>
                    <li class="col-md-3"><a href="#" title="066" group="1">066</a></li>
                    <li class="col-md-3"><a href="#" title="067" group="1">067</a></li>
                    <li class="col-md-3"><a href="#" title="068-069" group="1">068-069</a></li>
                    <li class="col-md-3"><a href="#" title="070" group="1">070</a></li>
                    <li class="col-md-3"><a href="#" title="071" group="1">071</a></li>
                    <li class="col-md-3"><a href="#" title="072" group="1">072</a></li>
                    <li class="col-md-3"><a href="#" title="073" group="1">073</a></li>
                    <li class="col-md-3"><a href="#" title="074" group="1">074</a></li>
                    <li class="col-md-3"><a href="#" title="075" group="1">075</a></li>
                    <li class="col-md-3"><a  href="#" title="076-077" group="1">076-077</a></li>
                    <li class="col-md-3"><a  href="#" title="078-079" group="1">078-079</a></li>
                    <li class="col-md-3"><a href="#" title="080" group="1">080</a></li>
                    <li class="col-md-3"><a href="#" title="081" group="1">081</a></li>
                    <li class="col-md-3"><a href="#" title="082" group="1">082</a></li>
                    <li class="col-md-3"><a href="#" title="083" group="1">083</a></li>
                    <li class="col-md-3"><a href="#" title="084" group="1">084</a></li>
                    <li class="col-md-3"><a href="#" title="085" group="1">085</a></li>
                    <li class="col-md-3"><a  href="#" title="086-087" group="1">086-087</a></li>
                    <li class="col-md-3"><a href="#" title="088" group="1">088</a></li>
                    <li class="col-md-3"><a href="#" title="089" group="1">089</a></li>
                    <li class="col-md-3"><a href="#" title="090" group="1">090</a></li>
                    <li class="col-md-3"><a href="#" title="091" group="1">091</a></li>
                    <li class="col-md-3"><a href="#" title="092" group="1">092</a></li>
                    <li class="col-md-3"><a href="#" title="093" group="1">093</a></li>
                    <li class="col-md-3"><a href="#" title="094" group="1">094</a></li>
                    <li class="col-md-3"><a href="#" title="095" group="1">095</a></li>
                    <li class="col-md-3"><a href="#" title="096" group="1">096</a></li>
                    <li class="col-md-3"><a href="#" title="097" group="1">097</a></li>
                    <li class="col-md-3"><a href="#" title="098" group="1">098</a></li>
                    <li class="col-md-3"><a href="#" title="099" group="1">099</a></li>
                    <li class="col-md-3"><a href="#" title="100" group="1">100</a></li> --}}
                </ul>
                {{-- <div class="row ">
                    <div class="col-12">
                      <div class="tab-content" id="v-pills-tabContent">
                        <ul class="row">
                            <li class="col-md-3"><a href="#" title="001" group="1">001</a></li>
                            <li class="col-md-3"><a href="#" title="002" group="1">002</a></li>
                            <li class="col-md-3"><a href="#" title="003" group="1">003</a></li>
                            <li class="col-md-3"><a href="#" title="004" group="1">004</a></li>
                            <li class="col-md-3"><a href="#" title="005" group="1">005</a></li>
                            <li class="col-md-3"><a href="#" title="006" group="1">006</a></li>
                            <li class="col-md-3"><a href="#" title="007" group="1">007</a></li>
                            <li class="col-md-3"><a href="#" title="008-009" group="1">008-009</a></li>
                            <li class="col-md-3"><a href="#" title="010" group="1">010</a></li>
                            <li class="col-md-3"><a href="#" title="011" group="1">011</a></li>
                            <li class="col-md-3"><a href="#" title="012" group="1">012</a></li>
                            <li class="col-md-3"><a href="#" title="013" group="1">013</a></li>
                            <li class="col-md-3"><a href="#" title="014" group="1">014</a></li>
                            <li class="col-md-3"><a href="#" title="015" group="1">015</a></li>
                            <li class="col-md-3"><a href="#" title="016" group="1">016</a></li>
                            <li class="col-md-3"><a href="#" title="017" group="1">017</a></li>
                            <li class="col-md-3"><a href="#" title="018" group="1">018</a></li>
                            <li class="col-md-3"><a href="#" title="019" group="1">019</a></li>
                            <li class="col-md-3"><a href="#" title="020" group="1">020</a></li>
                            <li class="col-md-3"><a href="#" title="021" group="1">021</a></li>
                            <li class="col-md-3"><a href="#" title="022" group="1">022</a></li>
                            <li class="col-md-3"><a href="#" title="023" group="1">023</a></li>
                            <li class="col-md-3"><a href="#" title="024" group="1">024</a></li>
                            <li class="col-md-3"><a href="#" title="025" group="1">025</a></li>
                            <li class="col-md-3"><a href="#" title="026" group="1">026</a></li>
                            <li class="col-md-3"><a href="#" title="027" group="1">027</a></li>
                            <li class="col-md-3"><a href="#" title="028" group="1">028</a></li>
                            <li class="col-md-3"><a href="#" title="029-030" group="1">029-030</a></li>
                            <li class="col-md-3"><a href="#" title="031" group="1">031</a></li>
                            <li class="col-md-3"><a href="#" title="032" group="1">032</a></li>
                            <li class="col-md-3"><a href="#" title="033" group="1">033</a></li>
                            <li class="col-md-3"><a href="#" title="034" group="1">034</a></li>
                            <li class="col-md-3"><a href="#" title="035" group="1">035</a></li>
                            <li class="col-md-3"><a href="#" title="036-037" group="1">036-037</a></li>
                            <li class="col-md-3"><a href="#" title="038" group="1">038</a></li>
                            <li class="col-md-3"><a href="#" title="039" group="1">039</a></li>
                            <li class="col-md-3"><a href="#" title="040-041" group="1">040-041</a></li>
                            <li class="col-md-3"><a href="#" title="042" group="1">042</a></li>
                            <li class="col-md-3"><a href="#" title="043" group="1">043</a></li>
                            <li class="col-md-3"><a href="#" title="044" group="1">044</a></li>
                            <li class="col-md-3"><a href="#" title="045" group="1">045</a></li>
                            <li class="col-md-3"><a href="#" title="046" group="1">046</a></li>
                            <li class="col-md-3"><a href="#" title="047" group="1">047</a></li>
                            <li class="col-md-3"><a href="#" title="048" group="1">048</a></li>
                            <li class="col-md-3"><a href="#" title="049" group="1">049</a></li>
                            <li class="col-md-3"><a href="#" title="050" group="1">050</a></li>
                            <li class="col-md-3"><a href="#" title="051-052" group="1">051-052</a></li>
                            <li class="col-md-3"><a href="#" title="053-054" group="1">053-054</a></li>
                            <li class="col-md-3"><a href="#" title="055" group="1">055</a></li>
                            <li class="col-md-3"><a href="#" title="056" group="1">056</a></li>
                            <li class="col-md-3"><a href="#" title="057-058" group="1">057-058</a></li>
                            <li class="col-md-3"><a href="#" title="059" group="1">059</a></li>
                            <li class="col-md-3"><a href="#" title="060" group="1">060</a></li>
                            <li class="col-md-3"><a href="#" title="061" group="1">061</a></li>
                            <li class="col-md-3"><a href="#" title="062" group="1">062</a></li>
                            <li class="col-md-3"><a href="#" title="063" group="1">063</a></li>
                            <li class="col-md-3"><a href="#" title="064-065" group="1">064-065</a></li>
                            <li class="col-md-3"><a href="#" title="066" group="1">066</a></li>
                            <li class="col-md-3"><a href="#" title="067" group="1">067</a></li>
                            <li class="col-md-3"><a href="#" title="068-069" group="1">068-069</a></li>
                            <li class="col-md-3"><a href="#" title="070" group="1">070</a></li>
                            <li class="col-md-3"><a href="#" title="071" group="1">071</a></li>
                            <li class="col-md-3"><a href="#" title="072" group="1">072</a></li>
                            <li class="col-md-3"><a href="#" title="073" group="1">073</a></li>
                            <li class="col-md-3"><a href="#" title="074" group="1">074</a></li>
                            <li class="col-md-3"><a href="#" title="075" group="1">075</a></li>
                            <li class="col-md-3"><a  href="#" title="076-077" group="1">076-077</a></li>
                            <li class="col-md-3"><a  href="#" title="078-079" group="1">078-079</a></li>
                            <li class="col-md-3"><a href="#" title="080" group="1">080</a></li>
                            <li class="col-md-3"><a href="#" title="081" group="1">081</a></li>
                            <li class="col-md-3"><a href="#" title="082" group="1">082</a></li>
                            <li class="col-md-3"><a href="#" title="083" group="1">083</a></li>
                            <li class="col-md-3"><a href="#" title="084" group="1">084</a></li>
                            <li class="col-md-3"><a href="#" title="085" group="1">085</a></li>
                            <li class="col-md-3"><a  href="#" title="086-087" group="1">086-087</a></li>
                            <li class="col-md-3"><a href="#" title="088" group="1">088</a></li>
                            <li class="col-md-3"><a href="#" title="089" group="1">089</a></li>
                            <li class="col-md-3"><a href="#" title="090" group="1">090</a></li>
                            <li class="col-md-3"><a href="#" title="091" group="1">091</a></li>
                            <li class="col-md-3"><a href="#" title="092" group="1">092</a></li>
                            <li class="col-md-3"><a href="#" title="093" group="1">093</a></li>
                            <li class="col-md-3"><a href="#" title="094" group="1">094</a></li>
                            <li class="col-md-3"><a href="#" title="095" group="1">095</a></li>
                            <li class="col-md-3"><a href="#" title="096" group="1">096</a></li>
                            <li class="col-md-3"><a href="#" title="097" group="1">097</a></li>
                            <li class="col-md-3"><a href="#" title="098" group="1">098</a></li>
                            <li class="col-md-3"><a href="#" title="099" group="1">099</a></li>
                            <li class="col-md-3"><a href="#" title="100" group="1">100</a></li>
                        </ul>
                        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                            <ul class="row">
                                <li class="col-md-3"><a href="#" title="101-102" group="2">101-102</a></li>
                                <li class="col-md-3"><a href="#" title="103-104" group="2">103-104</a></li>
                                <li class="col-md-3"><a href="#" title="105" group="2">105</a></li>
                                <li class="col-md-3"><a href="#" title="106" group="2">106</a></li>
                                <li class="col-md-3"><a href="#" title="107" group="2">107</a></li>
                                <li class="col-md-3"><a href="#" title="108" group="2">108</a></li>
                                <li class="col-md-3"><a href="#" title="109" group="2">109</a></li>
                                <li class="col-md-3"><a href="#" title="110" group="2">110</a></li>
                                <li class="col-md-3"><a href="#" title="111" group="2">111</a></li>
                                <li class="col-md-3"><a href="#" title="112" group="2">112</a></li>
                                <li class="col-md-3"><a href="#" title="113" group="2">113</a></li>
                                <li class="col-md-3"><a href="#" title="114" group="2">114</a></li>
                                <li class="col-md-3"><a href="#" title="115" group="2">115</a></li>
                                <li class="col-md-3"><a href="#" title="116" group="2">116</a></li>
                                <li class="col-md-3"><a href="#" title="117" group="2">117</a></li>
                                <li class="col-md-3"><a href="#" title="118" group="2">118</a></li>
                                <li class="col-md-3"><a href="#" title="119-120" group="2">119-120</a></li>
                                <li class="col-md-3"><a href="#" title="121" group="2">121</a></li>
                                <li class="col-md-3"><a href="#" title="122" group="2">122</a></li>
                                <li class="col-md-3"><a href="#" title="123" group="2">123</a></li>
                                <li class="col-md-3"><a href="#" title="124" group="2">124</a></li>
                                <li class="col-md-3"><a href="#" title="125" group="2">125</a></li>
                                <li class="col-md-3"><a href="#" title="126" group="2">126</a></li>
                                <li class="col-md-3"><a href="#" title="127-128" group="2">127-128</a></li>
                                <li class="col-md-3"><a href="#" title="129-130" group="2">129-130</a></li>
                                <li class="col-md-3"><a href="#" title="131" group="2">131</a></li>
                                <li class="col-md-3"><a href="#" title="132" group="2">132</a></li>
                                <li class="col-md-3"><a href="#" title="133" group="2">133</a></li>
                                <li class="col-md-3"><a href="#" title="134" group="2">134</a></li>
                                <li class="col-md-3"><a href="#" title="135-136" group="2">135-136</a></li>
                                <li class="col-md-3"><a href="#" title="137" group="2">137</a></li>
                                <li class="col-md-3"><a href="#" title="138" group="2">138</a></li>
                                <li class="col-md-3"><a href="#" title="139" group="2">139</a></li>
                                <li class="col-md-3"><a href="#" title="140" group="2">140</a></li>
                                <li class="col-md-3"><a href="#" title="141" group="2">141</a></li>
                                <li class="col-md-3"><a href="#" title="142" group="2">142</a></li>
                                <li class="col-md-3"><a href="#" title="143" group="2">143</a></li>
                                <li class="col-md-3"><a href="#" title="144" group="2">144</a></li>
                                <li class="col-md-3"><a href="#" title="145" group="2">145</a></li>
                                <li class="col-md-3"><a href="#" title="146" group="2">146</a></li>
                                <li class="col-md-3"><a href="#" title="147" group="2">147</a></li>
                                <li class="col-md-3"><a href="#" title="148" group="2">148</a></li>
                                <li class="col-md-3"><a href="#" title="149" group="2">149</a></li>
                                <li class="col-md-3"><a href="#" title="150" group="2">150</a></li>
                                <li class="col-md-3"><a href="#" title="151" group="2">151</a></li>
                                <li class="col-md-3"><a href="#" title="152-153" group="2">152-153</a></li>
                                <li class="col-md-3"><a href="#" title="154-155" group="2">154-155</a></li>
                                <li class="col-md-3"><a href="#" title="156" group="2">156</a></li>
                                <li class="col-md-3"><a href="#" title="157" group="2">157</a></li>
                                <li class="col-md-3"><a href="#" title="158" group="2">158</a></li>
                                <li class="col-md-3"><a href="#" title="159" group="2">159</a></li>
                                <li class="col-md-3"><a href="#" title="160" group="2">160</a></li>
                                <li class="col-md-3"><a href="#" title="161" group="2">161</a></li>
                                <li class="col-md-3"><a href="#" title="162" group="2">162</a></li>
                                <li class="col-md-3"><a href="#" title="163" group="2">163</a></li>
                                <li class="col-md-3"><a href="#" title="164" group="2">164</a></li>
                                <li class="col-md-3"><a href="#" title="165" group="2">165</a></li>
                                <li class="col-md-3"><a href="#" title="166" group="2">166</a></li>
                                <li class="col-md-3"><a href="#" title="167" group="2">167</a></li>
                                <li class="col-md-3"><a href="#" title="168" group="2">168</a></li>
                                <li class="col-md-3"><a href="#" title="169" group="2">169</a></li>
                                <li class="col-md-3"><a href="#" title="170-171" group="2">170-171</a></li>
                                <li class="col-md-3"><a href="#" title="172" group="2">172</a></li>
                                <li class="col-md-3"><a href="#" title="173" group="2">173</a></li>
                                <li class="col-md-3"><a href="#" title="174" group="2">174</a></li>
                                <li class="col-md-3"><a href="#" title="175" group="2">175</a></li>
                                <li class="col-md-3"><a href="#" title="176" group="2">176</a></li>
                                <li class="col-md-3"><a href="#" title="177" group="2">177</a></li>
                                <li class="col-md-3"><a href="#" title="178" group="2">178</a></li>
                                <li class="col-md-3"><a href="#" title="179" group="2">179</a></li>
                                <li class="col-md-3"><a href="#" title="180" group="2">180</a></li>
                                <li class="col-md-3"><a href="#" title="181" group="2">181</a></li>
                                <li class="col-md-3"><a href="#" title="182" group="2">182</a></li>
                                <li class="col-md-3"><a href="#" title="183" group="2">183</a></li>
                                <li class="col-md-3"><a href="#" title="184" group="2">184</a></li>
                                <li class="col-md-3"><a href="#" title="185" group="2">185</a></li>
                                <li class="col-md-3"><a href="#" title="186" group="2">186</a></li>
                                <li class="col-md-3"><a href="#" title="187-188" group="2">187-188</a></li>
                                <li class="col-md-3"><a href="#" title="189" group="2">189</a></li>
                                <li class="col-md-3"><a href="#" title="190" group="2">190</a></li>
                                <li class="col-md-3"><a href="#" title="191" group="2">191</a></li>
                                <li class="col-md-3"><a href="#" title="192" group="2">192</a></li>
                                <li class="col-md-3"><a href="#" title="193" group="2">193</a></li>
                                <li class="col-md-3"><a href="#" title="194" group="2">194</a></li>
                                <li class="col-md-3"><a href="#" title="195" group="2">195</a></li>
                                <li class="col-md-3"><a href="#" title="196" group="2">196</a></li>
                                <li class="col-md-3"><a href="#" title="197-198" group="2">197-198</a></li>
                                <li class="col-md-3"><a href="#" title="199" group="2">199</a></li>
                                <li class="col-md-3"><a href="#" title="200" group="2">200</a></li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                            <ul class="row">
                                <li class="col-md-3"><a href="#" title="201" group="3">201</a></li>
                                <li class="col-md-3"><a href="#" title="202" group="3">202</a></li>
                                <li class="col-md-3"><a href="#" title="203" group="3">203</a></li>
                                <li class="col-md-3"><a href="#" title="204" group="3">204</a></li>
                                <li class="col-md-3"><a href="#" title="205" group="3">205</a></li>
                                <li class="col-md-3"><a href="#" title="206" group="3">206</a></li>
                                <li class="col-md-3"><a href="#" title="207" group="3">207</a></li>
                                <li class="col-md-3"><a href="#" title="208" group="3">208</a></li>
                                <li class="col-md-3"><a href="#" title="209" group="3">209</a></li>
                                <li class="col-md-3"><a href="#" title="210" group="3">210</a></li>
                                <li class="col-md-3"><a href="#" title="211" group="3">211</a></li>
                                <li class="col-md-3"><a href="#" title="212" group="3">212</a></li>
                                <li class="col-md-3"><a href="#" title="213" group="3">213</a></li>
                                <li class="col-md-3"><a href="#" title="214" group="3">214</a></li>
                                <li class="col-md-3"><a href="#" title="215" group="3">215</a></li>
                                <li class="col-md-3"><a href="#" title="216" group="3">216</a></li>
                                <li class="col-md-3"><a href="#" title="217" group="3">217</a></li>
                                <li class="col-md-3"><a href="#" title="218" group="3">218</a></li>
                                <li class="col-md-3"><a href="#" title="219" group="3">219</a></li>
                                <li class="col-md-3"><a href="#" title="220" group="3">220</a></li>
                                <li class="col-md-3"><a href="#" title="221-222" group="3">221-222</a></li>
                                <li class="col-md-3"><a href="#" title="223" group="3">223</a></li>
                                <li class="col-md-3"><a href="#" title="224" group="3">224</a></li>
                                <li class="col-md-3"><a href="#" title="225" group="3">225</a></li>
                                <li class="col-md-3"><a href="#" title="226" group="3">226</a></li>
                                <li class="col-md-3"><a href="#" title="227" group="3">227</a></li>
                                <li class="col-md-3"><a href="#" title="228" group="3">228</a></li>
                                <li class="col-md-3"><a href="#" title="229" group="3">229</a></li>
                                <li class="col-md-3"><a href="#" title="230" group="3">230</a></li>
                                <li class="col-md-3"><a href="#" title="231" group="3">231</a></li>
                                <li class="col-md-3"><a href="#" title="232" group="3">232</a></li>
                                <li class="col-md-3"><a href="#" title="233" group="3">233</a></li>
                                <li class="col-md-3"><a href="#" title="234" group="3">234</a></li>
                                <li class="col-md-3"><a href="#" title="235" group="3">235</a></li>
                                <li class="col-md-3"><a href="#" title="236" group="3">236</a></li>
                                <li class="col-md-3"><a href="#" title="237" group="3">237</a></li>
                                <li class="col-md-3"><a href="#" title="238" group="3">238</a></li>
                                <li class="col-md-3"><a href="#" title="239" group="3">239</a></li>
                                <li class="col-md-3"><a href="#" title="240" group="3">240</a></li>
                                <li class="col-md-3"><a href="#" title="241" group="3">241</a></li>
                                <li class="col-md-3"><a href="#" title="242" group="3">242</a></li>
                                <li class="col-md-3"><a href="#" title="243" group="3">243</a></li>
                                <li class="col-md-3"><a href="#" title="244" group="3">244</a></li>
                                <li class="col-md-3"><a href="#" title="245" group="3">245</a></li>
                                <li class="col-md-3"><a href="#" title="246" group="3">246</a></li>
                                <li class="col-md-3"><a href="#" title="247" group="3">247</a></li>
                                <li class="col-md-3"><a href="#" title="248" group="3">248</a></li>
                                <li class="col-md-3"><a href="#" title="249" group="3">249</a></li>
                                <li class="col-md-3"><a href="#" title="250" group="3">250</a></li>
                                <li class="col-md-3"><a href="#" title="251" group="3">251</a></li>
                                <li class="col-md-3"><a href="#" title="252" group="3">252</a></li>
                                <li class="col-md-3"><a href="#" title="253" group="3">253</a></li>
                                <li class="col-md-3"><a href="#" title="254" group="3">254</a></li>
                                <li class="col-md-3"><a href="#" title="255" group="3">255</a></li>
                                <li class="col-md-3"><a href="#" title="256" group="3">256</a></li>
                                <li class="col-md-3"><a href="#" title="257" group="3">257</a></li>
                                <li class="col-md-3"><a href="#" title="258" group="3">258</a></li>
                                <li class="col-md-3"><a href="#" title="259" group="3">259</a></li>
                                <li class="col-md-3"><a href="#" title="260" group="3">260</a></li>
                                <li class="col-md-3"><a href="#" title="261" group="3">261</a></li>
                                <li class="col-md-3"><a href="#" title="262" group="3">262</a></li>
                                <li class="col-md-3"><a href="#" title="263" group="3">263</a></li>
                                <li class="col-md-3"><a href="#" title="264" group="3">264</a></li>
                                <li class="col-md-3"><a href="#" title="265" group="3">265</a></li>
                                <li class="col-md-3"><a href="#" title="266" group="3">266</a></li>
                                <li class="col-md-3"><a href="#" title="267" group="3">267</a></li>
                                <li class="col-md-3"><a href="#" title="268" group="3">268</a></li>
                                <li class="col-md-3"><a href="#" title="269" group="3">269</a></li>
                                <li class="col-md-3"><a href="#" title="270" group="3">270</a></li>
                                <li class="col-md-3"><a href="#" title="271" group="3">271</a></li>
                                <li class="col-md-3"><a href="#" title="272" group="3">272</a></li>
                                <li class="col-md-3"><a href="#" title="273" group="3">273</a></li>
                                <li class="col-md-3"><a href="#" title="274" group="3">274</a></li>
                                <li class="col-md-3"><a href="#" title="275" group="3">275</a></li>
                                <li class="col-md-3"><a href="#" title="276" group="3">276</a></li>
                                <li class="col-md-3"><a href="#" title="277" group="3">277</a></li>
                                <li class="col-md-3"><a href="#" title="278" group="3">278</a></li>
                                <li class="col-md-3"><a href="#" title="279" group="3">279</a></li>
                                <li class="col-md-3"><a href="#" title="280" group="3">280</a></li>
                                <li class="col-md-3"><a href="#" title="281" group="3">281</a></li>
                                <li class="col-md-3"><a href="#" title="282" group="3">282</a></li>
                                <li class="col-md-3"><a href="#" title="283" group="3">283</a></li>
                                <li class="col-md-3"><a href="#" title="284" group="3">284</a></li>
                                <li class="col-md-3"><a href="#" title="285" group="3">285</a></li>
                                <li class="col-md-3"><a href="#" title="286" group="3">286</a></li>
                                <li class="col-md-3"><a href="#" title="287" group="3">287</a></li>
                                <li class="col-md-3"><a href="#" title="288" group="3">288</a></li>
                                <li class="col-md-3"><a href="#" title="289" group="3">289</a></li>
                                <li class="col-md-3"><a href="#" title="290" group="3">290</a></li>
                                <li class="col-md-3"><a href="#" title="291" group="3">291</a></li>
                                <li class="col-md-3"><a href="#" title="292" group="3">292</a></li>
                                <li class="col-md-3"><a href="#" title="293" group="3">293</a></li>
                                <li class="col-md-3"><a href="#" title="294" group="3">294</a></li>
                                <li class="col-md-3"><a href="#" title="295" group="3">295</a></li>
                                <li class="col-md-3"><a href="#" title="296" group="3">296</a></li>
                                <li class="col-md-3"><a href="#" title="297" group="3">297</a></li>
                                <li class="col-md-3"><a href="#" title="298" group="3">298</a></li>
                                <li class="col-md-3"><a href="#" title="299" group="3">299</a></li>
                                <li class="col-md-3"><a href="#" title="300" group="3">300</a></li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                            <ul class="row">
                                <li class="col-md-3"><a href="#"title="301" group="4">301</a></li>
                                <li class="col-md-3"><a href="#"title="302" group="4">302</a></li>
                                <li class="col-md-3"><a href="#"title="303" group="4">303</a></li>
                                <li class="col-md-3"><a href="#"title="304" group="4">304</a></li>
                                <li class="col-md-3"><a href="#"title="305" group="4">305</a></li>
                                <li class="col-md-3"><a href="#"title="306" group="4">306</a></li>
                                <li class="col-md-3"><a href="#"title="307" group="4">307</a></li>
                                <li class="col-md-3"><a href="#"title="308" group="4">308</a></li>
                                <li class="col-md-3"><a href="#"title="309" group="4">309</a></li>
                                <li class="col-md-3"><a href="#"title="310" group="4">310</a></li>
                                <li class="col-md-3"><a href="#"title="311" group="4">311</a></li>
                                <li class="col-md-3"><a href="#"title="312" group="4">312</a></li>
                                <li class="col-md-3"><a href="#"title="313" group="4">313</a></li>
                                <li class="col-md-3"><a href="#"title="314" group="4">314</a></li>
                                <li class="col-md-3"><a href="#"title="315" group="4">315</a></li>
                                <li class="col-md-3"><a href="#"title="316" group="4">316</a></li>
                                <li class="col-md-3"><a href="#"title="317" group="4">317</a></li>
                                <li class="col-md-3"><a href="#"title="318" group="4">318</a></li>
                                <li class="col-md-3"><a href="#"title="319" group="4">319</a></li>
                                <li class="col-md-3"><a href="#"title="320" group="4">320</a></li>
                                <li class="col-md-3"><a href="#"title="321" group="4">321</a></li>
                                <li class="col-md-3"><a href="#"title="322" group="4">322</a></li>
                                <li class="col-md-3"><a href="#"title="323" group="4">323</a></li>
                                <li class="col-md-3"><a href="#"title="324" group="4">324</a></li>
                                <li class="col-md-3"><a href="#"title="325" group="4">325</a></li>
                                <li class="col-md-3"><a href="#"title="326" group="4">326</a></li>
                                <li class="col-md-3"><a href="#" title="327+328" group="4">327+328</a></li>
                                <li class="col-md-3"><a href="#"title="329" group="4">329</a></li>
                                <li class="col-md-3"><a href="#"title="330" group="4">330</a></li>
                                <li class="col-md-3"><a href="#"title="331" group="4">331</a></li>
                                <li class="col-md-3"><a href="#"title="332" group="4">332</a></li>
                                <li class="col-md-3"><a href="#"title="333" group="4">333</a></li>
                                <li class="col-md-3"><a href="#"title="334" group="4">334</a></li>
                                <li class="col-md-3"><a href="#"title="335" group="4">335</a></li>
                                <li class="col-md-3"><a href="#"title="336" group="4">336</a></li>
                                <li class="col-md-3"><a href="#"title="337" group="4">337</a></li>
                                <li class="col-md-3"><a href="#"title="338" group="4">338</a></li>
                                <li class="col-md-3"><a href="#"title="339" group="4">339</a></li>
                                <li class="col-md-3"><a href="#"title="340" group="4">340</a></li>
                                <li class="col-md-3"><a href="#"title="341" group="4">341</a></li>
                                <li class="col-md-3"><a href="#"title="342" group="4">342</a></li>
                                <li class="col-md-3"><a href="#"title="343" group="4">343</a></li>
                                <li class="col-md-3"><a href="#"title="344" group="4">344</a></li>
                                <li class="col-md-3"><a href="#"title="345" group="4">345</a></li>
                                <li class="col-md-3"><a href="#" title="346+347" group="4">346+347</a></li>
                                <li class="col-md-3"><a href="#"title="348" group="4">348</a></li>
                                <li class="col-md-3"><a href="#"title="349" group="4">349</a></li>
                                <li class="col-md-3"><a href="#"title="350" group="4">350</a></li>
                                <li class="col-md-3"><a href="#"title="351" group="4">351</a></li>
                                <li class="col-md-3"><a href="#"title="352" group="4">352</a></li>
                                <li class="col-md-3"><a href="#" title="353+354" group="4">353+354</a></li>
                                <li class="col-md-3"><a href="#"title="355" group="4">355</a></li>
                                <li class="col-md-3"><a href="#"title="356" group="4">356</a></li>
                                <li class="col-md-3"><a href="#"title="357" group="4">357</a></li>
                                <li class="col-md-3"><a href="#" title="358" group="4">358</a></li>
                                <li class="col-md-3"><a href="#" title="359" group="4">359</a></li>
                                <li class="col-md-3"><a href="#" title="360" group="4">360</a></li>
                                <li class="col-md-3"><a href="#" title="361" group="4">361</a></li>
                                <li class="col-md-3"><a href="#" title="362" group="4">362</a></li>
                                <li class="col-md-3"><a href="#" title="363" group="4">363</a></li>
                                <li class="col-md-3"><a href="#" title="364" group="4">364</a></li>
                                <li class="col-md-3"><a href="#" title="365" group="4">365</a></li>
                                <li class="col-md-3"><a href="#" title="366" group="4">366</a></li>
                                <li class="col-md-3"><a href="#" title="367" group="4">367</a></li>
                                <li class="col-md-3"><a href="#" title="368" group="4">368</a></li>
                                <li class="col-md-3"><a href="#" title="369" group="4">369</a></li>
                                <li class="col-md-3"><a href="#" title="370" group="4">370</a></li>
                                <li class="col-md-3"><a href="#" title="371" group="4">371</a></li>
                                <li class="col-md-3"><a href="#" title="372" group="4">372</a></li>
                                <li class="col-md-3"><a href="#" title="373" group="4">373</a></li>
                                <li class="col-md-3"><a href="#" title="374" group="4">374</a></li>
                                <li class="col-md-3"><a href="#" title="375" group="4">375</a></li>
                                <li class="col-md-3"><a href="#" title="376+377" group="4">376+377</a></li>
                                <li class="col-md-3"><a href="#" title="378" group="4">378</a></li>
                                <li class="col-md-3"><a href="#" title="379" group="4">379</a></li>
                                <li class="col-md-3"><a href="#" title="380" group="4">380</a></li>
                                <li class="col-md-3"><a href="#" title="381" group="4">381</a></li>
                                <li class="col-md-3"><a href="#" title="382" group="4">382</a></li>
                                <li class="col-md-3"><a href="#" title="383" group="4">383</a></li>
                                <li class="col-md-3"><a href="#" title="384" group="4">384</a></li>
                                <li class="col-md-3"><a href="#" title="385" group="4">385</a></li>
                                <li class="col-md-3"><a href="#" title="386" group="4">386</a></li>
                                <li class="col-md-3"><a href="#" title="387" group="4">387</a></li>
                                <li class="col-md-3"><a href="#" title="388" group="4">388</a></li>
                                <li class="col-md-3"><a href="#" title="389-390" group="4">389-390</a></li>
                                <li class="col-md-3"><a href="#" title="391" group="4">391</a></li>
                                <li class="col-md-3"><a href="#" title="392" group="4">392</a></li>
                                <li class="col-md-3"><a href="#" title="393" group="4">393</a></li>
                                <li class="col-md-3"><a href="#" title="394" group="4">394</a></li>
                                <li class="col-md-3"><a href="#" title="395" group="4">395</a></li>
                                <li class="col-md-3"><a href="#" title="396" group="4">396</a></li>
                                <li class="col-md-3"><a href="#" title="397" group="4">397</a></li>
                                <li class="col-md-3"><a href="#" title="398" group="4">398</a></li>
                                <li class="col-md-3"><a href="#" title="399" group="4">399</a></li>
                                <li class="col-md-3"><a href="#" title="400" group="4">400</a></li>
                            </ul>
                        </div>
                      </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
    {{-- <div>
        <div>
            <h3 class="text-center bg-success">BÌNH LUẬN PHIM</h3>
        </div>
        <div class="form-group">
            <form action="{{route('page.addcomment')}}" method="POST">
                @csrf
                <textarea class="form-control bg-dark" name="content" id="exampleFormControlTextarea1" rows="3"></textarea>
                <input type="hidden" name="flim_id" value="{{$id}}">
                <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                <button id="btn-film-watch" class="btn btn-outline-success" type="submit">Gửi</button>
            </form>
        </div>
        <div>
            @foreach ($comment as $com)
                <div class="comment-item bg-white" style="margin: 20px">
                        <div class="content" >
                            <span>Member: {{ $com->name}}</span>
                            <span>  Thời gian: {{date("d/m/Y",strtotime($com->created_at))}}</span>
                        </div>
                        <div class="content" >Nội dung: {{ $com->content}}</div>                    
                </div>
            @endforeach
        </div>
    </div> --}}
    <div class="clear"></div>
    
</div>
@endsection
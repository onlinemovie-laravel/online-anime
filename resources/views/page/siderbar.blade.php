<h1 style="display: none">{{$count = $rdflim->count()}}</h1>
<div class="col-lg-4 sidebar" id="sidebar">
    <div class="right-box top-film">
        <h2 class="right-box-header star-icon"><span>BXH</span></h2>
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item active" role="presentation">
              <a class="nav-link active text-warning" id="home-tab" data-toggle="tab" href="#day" role="tab" aria-controls="day" aria-selected="true">TO DAY</a>
            </li>
            <li class="nav-item" role="presentation">
              <a class="nav-link text-warning" id="profile-tab" data-toggle="tab" href="#week" role="tab" aria-controls="week" aria-selected="false">ALL</a>
            </li>
        </ul>
        <div class="right-box-content tab-content ">
            <div class="tab-pane active" id="day" role="tabpanel" aria-labelledby="day-tab">
                <ul class="list-top-movie">
                    @for ($i = 0; $i < $count; $i++)
                        @if ($i == 0)
                        <li class="list-top-movie-item" id="list-top-movie-item">
                            <a class="list-top-movie-link" title="{{$rdflim[$i]->subname}}" href="{{Route('page.inforpage',['id' => $rdflim[$i]->id])}}">
                                <span class="status">10/{{$rdflim[$i]->total_chap}}</span>
                                <div class="list-top-movie-item-thumb" style="background-image: url('{{$rdflim[$i]->image}}')"></div>
                                <div class="list-top-movie-item-info">
                                    <span class="list-top-movie-item-vn">{{$rdflim[$i]->name}}</span>
                                    <span class="list-top-movie-item-en">{{$rdflim[$i]->subname}}</span>
                                    <span class="list-top-movie-item-view">{{$rdflim[$i]->total_views}}  Lượt xem</span>
                                </div>
                            </a>
                        </li>
                        @else
                        <li class="list-top-movie-item" id="list-top-movie-item">
                            <a class="list-top-movie-link" title="{{$rdflim[$i]->subname}}" href="{{Route('page.inforpage',['id' => $rdflim[$i]->id])}}">
                                <span class="status">10/{{$rdflim[$i]->total_chap}}</span>
                                <div class="list-top-movie-item-thumb" style="background-image: url('{{$rdflim[$i]->image}}')"></div>
                                <div class="list-top-movie-item-info">
                                    <span class="list-top-movie-item-vn">{{$rdflim[$i]->name}}</span>
                                    <span class="list-top-movie-item-en">{{$rdflim[$i]->subname}}</span>
                                    <span class="list-top-movie-item-view">{{$rdflim[$i]->total_views}}  Lượt xem</span>
                                </div>
                            </a>
                        </li>
                        @endif
                    @endfor
                </ul>
            </div>
            <div class="tab-pane" id="week" role="tabpanel" aria-labelledby="week-tab">
                <ul class="list-top-movie">
                    {{-- {{$count = $rdflim->count()}} --}}
                    @for ($i = 0; $i < $count; $i++)
                        @if ($i == 0)
                        <li class="list-top-movie-item" id="list-top-movie-item">
                            <a class="list-top-movie-link" title="{{$rdflim[$i]->subname}}" href="{{Route('page.inforpage',['id' => $rdflim[$i]->id])}}">
                                <span class="status">10/{{$rdflim[$i]->total_chap}}</span>
                                <div class="list-top-movie-item-thumb" style="background-image: url('{{$rdflim[$i]->image}}')"></div>
                                <div class="list-top-movie-item-info">
                                    <span class="list-top-movie-item-vn">{{$rdflim[$i]->name}}</span>
                                    <span class="list-top-movie-item-en">{{$rdflim[$i]->subname}}</span>
                                    <span class="list-top-movie-item-view">{{$rdflim[$i]->total_views}}  Lượt xem</span>
                                </div>
                            </a>
                        </li>
                        @else
                        <li class="list-top-movie-item" id="list-top-movie-item">
                            <a class="list-top-movie-link" title="{{$rdflim[$i]->subname}}" href="{{Route('page.inforpage',['id' => $rdflim[$i]->id])}}">
                                <span class="status">10/{{$rdflim[$i]->total_chap}}</span>
                                <div class="list-top-movie-item-thumb" style="background-image: url('{{$rdflim[$i]->image}}')"></div>
                                <div class="list-top-movie-item-info">
                                    <span class="list-top-movie-item-vn">{{$rdflim[$i]->name}}</span>
                                    <span class="list-top-movie-item-en">{{$rdflim[$i]->subname}}</span>
                                    <span class="list-top-movie-item-view">{{$rdflim[$i]->total_views}}  Lượt xem</span>
                                </div>
                            </a>
                        </li>
                        @endif
                    @endfor
                </ul>
                {{-- <ul class="list-top-movie">
                    <li class="list-top-movie-item" id="list-top-movie-item">
                        <a class="list-top-movie-link" title="Kaguya-sama: Love is War Season 2 | Kaguya-sama: Love is War Season 2 | Kaguya Wants to be Confessed To: The Geniuses\' War of Love and Brains 2nd Season, Kaguya-sama wa Kokurasetai: Tensai-tachi no Renai Zunousen 2nd Season, Kaguya-sama: Love is War 2nd Season - Kaguya-sama wa Kokurasetai?: Tensai-tachi no Renai Zunousen" href="/phim/kaguya-sama-wa-kokurasetai-tensai-tachi-no-renai-zunousen/m7548.html">
                            <span class="status">09/12</span>
                            <div class="list-top-movie-item-thumb" style="background-image: url('https://img.anime47.com/imgur/Cqh26UT.jpg')"></div>
                            <div class="list-top-movie-item-info"><span class="list-top-movie-item-vn">Kaguya-sama wa Kokurasetai?: Tensai-tachi no Renai Zunousen</span><span class="list-top-movie-item-en"> Kaguya-sama: Love ...</span><span class="list-top-movie-item-view">18915 Lượt xem</span></div>
                        </a>
                    </li>
                    <li class="list-top-movie-item" id="list-top-movie-item">
                        <a class="list-top-movie-link" title="Gleipnir - Gleipnir" href="/phim/gleipnir/m7553.html">
                            <span class="status">10/12</span>
                            <div class="list-top-movie-item-thumb" style="background-image: url('https://img.anime47.com/imgur/WSgvXYV.jpg')"></div>
                            <div class="list-top-movie-item-info"><span class="list-top-movie-item-vn">Gleipnir</span><span class="list-top-movie-item-en">Gleipnir</span><span class="list-top-movie-item-view">15780 Lượt xem</span></div>
                        </a>
                    </li>
                    <li class="list-top-movie-item" id="list-top-movie-item">
                        <a class="list-top-movie-link" title="Princess Connect! Re:Dive - Princess Connect! Re:Dive" href="/phim/princess-connect-re-dive/m7150.html">
                            <span class="status">10/??</span>
                            <div class="list-top-movie-item-thumb" style="background-image: url('https://img.anime47.com/imgur/iObbi16.jpg')"></div>
                            <div class="list-top-movie-item-info"><span class="list-top-movie-item-vn">Princess Connect! Re:Dive</span><span class="list-top-movie-item-en"> Princess Connect! ...</span><span class="list-top-movie-item-view">15480 Lượt xem</span></div>
                        </a>
                    </li>
                    <li class="list-top-movie-item" id="list-top-movie-item">
                        <a class="list-top-movie-link" title="Baki 2nd Season - Baki 2nd Season" href="/phim/baki-2nd-season/m7593.html">
                            <span class="status">01&gt;13/13</span>
                            <div class="list-top-movie-item-thumb" style="background-image: url('https://img.anime47.com/imgur/X4reTK5.jpg')"></div>
                            <div class="list-top-movie-item-info"><span class="list-top-movie-item-vn">Baki 2nd Season</span><span class="list-top-movie-item-en"> Baki 2nd ...</span><span class="list-top-movie-item-view">14790 Lượt xem</span></div>
                        </a>
                    </li>
                    <li class="list-top-movie-item" id="list-top-movie-item">
                        <a class="list-top-movie-link" title="My Life as a Villainess: All Routes Lead to Doom! | Hamefura, I Reincarnated into an Otome Game as a Villainess With Only Destruction Flags…, Destruction Flag Otome - Otome Game no Hametsu Flag shika Nai Akuyaku Reijou ni Tensei shiteshimatta.." href="/phim/otome-game-no-hametsu-flag-shika-nai-akuyaku-reijou-ni-tensei-shiteshimatta/m7554.html">
                            <span class="status">10/??</span>
                            <div class="list-top-movie-item-thumb" style="background-image: url('https://img.anime47.com/imgur/U0tysKt.jpg')"></div>
                            <div class="list-top-movie-item-info"><span class="list-top-movie-item-vn">Otome Game no Hametsu Flag shika Nai Akuyaku Reijou ni Tensei shiteshimatta..</span><span class="list-top-movie-item-en"> My Life ...</span><span class="list-top-movie-item-view">13035 Lượt xem</span></div>
                        </a>
                    </li>
                    <li class="list-top-movie-item" id="list-top-movie-item">
                        <a class="list-top-movie-link" title="Tsugumomo 2nd Season - Tsugu Tsugumomo" href="/phim/tsugu-tsugumomo/m7561.html">
                            <span class="status">10/??</span>
                            <div class="list-top-movie-item-thumb" style="background-image: url('https://img.anime47.com/imgur/WfBhJ4s.jpg')"></div>
                            <div class="list-top-movie-item-info"><span class="list-top-movie-item-vn">Tsugu Tsugumomo</span><span class="list-top-movie-item-en"> Tsugumomo 2nd ...</span><span class="list-top-movie-item-view">11130 Lượt xem</span></div>
                        </a>
                    </li>
                    <li class="list-top-movie-item" id="list-top-movie-item">
                        <a class="list-top-movie-link" title="Hachinan tte, Sore wa Nai deshou!, The 8th son? Are you kidding me? - Hachi-nan tte, Sore wa Nai deshou!" href="/phim/hachi-nan-tte-sore-wa-nai-deshou/m7559.html">
                            <span class="status">10/12</span>
                            <div class="list-top-movie-item-thumb" style="background-image: url('https://img.anime47.com/imgur/bapNKhZ.jpg')"></div>
                            <div class="list-top-movie-item-info"><span class="list-top-movie-item-vn">Hachi-nan tte, Sore wa Nai deshou!</span><span class="list-top-movie-item-en"> Hachinan tte, ...</span><span class="list-top-movie-item-view">10245 Lượt xem</span></div>
                        </a>
                    </li>
                </ul> --}}
            </div>
        </div>
    </div>
    <div class="clear"></div>
    <div class="right-box bl-film">
        <h2 class="right-box-header star-icon"><span>Bình luận nhiều</span></h2>
        <div class="right-box-content">
            <div class="content" data-name="blmn">
                <ul class="list-top-movie">
                    @for ($i = 0; $i < $count; $i++)
                        @if ($i == 0)
                        <li class="list-top-movie-item" id="list-top-movie-item">
                            <a class="list-top-movie-link" title="{{$rdflim[$i]->subname}}" href="{{Route('page.inforpage',['id' => $rdflim[$i]->id])}}">
                                <span class="status">10/{{$rdflim[$i]->total_chap}}</span>
                                <div class="list-top-movie-item-thumb" style="background-image: url('{{$rdflim[$i]->image}}')"></div>
                                <div class="list-top-movie-item-info">
                                    <span class="list-top-movie-item-vn">{{$rdflim[$i]->name}}</span>
                                    <span class="list-top-movie-item-en">{{$rdflim[$i]->subname}}</span>
                                    <span class="list-top-movie-item-view">{{$rdflim[$i]->total_views}}  Lượt xem</span>
                                </div>
                            </a>
                        </li>
                        @else
                        <li class="list-top-movie-item" id="list-top-movie-item">
                            <a class="list-top-movie-link" title="{{$rdflim[$i]->subname}}" href="{{Route('page.inforpage',['id' => $rdflim[$i]->id])}}">
                                <span class="status">10/{{$rdflim[$i]->total_chap}}</span>
                                <div class="list-top-movie-item-thumb" style="background-image: url('{{$rdflim[$i]->image}}')"></div>
                                <div class="list-top-movie-item-info">
                                    <span class="list-top-movie-item-vn">{{$rdflim[$i]->name}}</span>
                                    <span class="list-top-movie-item-en">{{$rdflim[$i]->subname}}</span>
                                    <span class="list-top-movie-item-view">{{$rdflim[$i]->total_views}}  Lượt xem</span>
                                </div>
                            </a>
                        </li>
                        @endif
                    @endfor
                </ul>
            </div>
        </div>
    </div>
    <div class="ad-container right-box ad-300">
    </div>
    <div class="clear"></div>
    <!-- /Ad: Sidebanner -->
</div>
<header>
    <div class="header">
        <div class="container">
            <!-- header logo -->
            <div class="header-logo" ><a class="" href="/" title="ANIME VIETSUB ONLINE HD" ><img  class=" logotop" src="{{asset('img/123.png')}}"></a></div>
            <div class="widget_search">
                <form method="POST" id="form-search" action="{{ route('page.searchvideo')}}">
                    @csrf
                    <div>
                        <input type="text" name="name" placeholder="Tìm: tên anime ... " value="" onkeyup="onSearch(this.value)" id="searchkeyword" autocomplete="off">
                        <input style="display: none;" id="searchsubmit" class="" value=" " type="submit">
                    </div>
                </form>
                <div class="search-suggest" style="display: none;">
                    <ul style="margin-bottom: 0;" id="search-suggest-list"></ul>
                </div>
            </div>
            <div class="widget_user_header">
                @guest
                
                    <a class="button-login" rel="nofollow" href="{{ route('login') }}"></a>
               
                @if (Route::has('register'))
                    
                        <a class="button-register" rel="nofollow" href="{{ route('register') }}"></a>
                    
                @endif
                @else
                <li class="">
                    <a id="navbarDropdown" class="dropdown-toggle btn btn-outline-danger" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} 
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/profile">{{ __('profile') }}</a>
                        <a class="dropdown-item" href="{{ route('user.boxindex',['id' => Auth::user()->id])}}">{{ __('Tủ Flim') }}</a>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>   
                @endguest
            </div>
        </div>
    </div>
</header>
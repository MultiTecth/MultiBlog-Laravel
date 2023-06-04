<div class="jumbotron">
    <div class="navbar">

        <!-- Navbar kiri -->
        <div class="nav-menu">
            <div class="text">
                <a href="{{ url('home') }}" style="text-decoration: none">
                    <h2>MultiBlog</h2>
                </a>
            </div>
            <div class="list">
                <ul class="ul-list">

                    <li><a href="{{ url('home') }}">Home</a></li>
                    <li><a href="{{ url('home/about') }}">About</a></li>

                    <div class="dropdown-center">

                        <button class="btn text-white dropdown-toggle" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Browse
                        </button>

                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ url('home/news') }}">News</a></li>
                            <li><a class="dropdown-item" href="{{ url('home/Novel') }}">Novel</a></li>
                            <li><a class="dropdown-item" href="{{ url('home/Short Story') }}">Short Story</a></li>
                        </ul>

                    </div>
                </ul>
            </div>
        </div>
        <!-- Akhir Navbar kiri -->

        <!-- Navbar kanan -->
        <div class="more-menu-cnt">

            <!-- Search & Tweet -->
            <div class="more-menu">
                <div class="search-container" id="targetDiv">
                    <img src="{{ asset('Asset2/img/icon/searchpng.png') }}" alt="">
                    <input type="text" class="search-input" placeholder="Search..." id="input">
                    <div class="search-dropdown">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="browse-tab" data-bs-toggle="tab"
                                    data-bs-target="#browse" type="button" role="tab" aria-controls="browse"
                                    aria-selected="true">Browse</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="user-tab" data-bs-toggle="tab" data-bs-target="#user"
                                    type="button" role="tab" aria-controls="user"
                                    aria-selected="false">User</button>
                            </li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane active" id="browse" role="tabpanel"
                                aria-labelledby="browse-tab" tabindex="0">
                                <!-- Container -->
                                <div class="container-borwse-tab blog" id="blogs">
                                    <!-- Card -->
                                    <div class="card">
                                        <div id="judul">
                                            <h5>Seacrh blog apa hari ini?</h5>
                                        </div>
                                    </div>
                                    <!--End Card-->

                                </div>
                                <!--End Container-->
                            </div>
                            <div class="tab-pane" id="user" role="tabpanel" aria-labelledby="user-tab" tabindex="0">
                                     <!-- Container -->
                                    <div class="container-friends-tab users" id="users">
                                        <!-- Card -->
                                        <div class="card">
                                            <div class="messange">
                                                <div class="username">
                                                    <p>Search siapa nich?</p>
                                                </div>
                                            </div>
                                        </div>

                                        <!--End Card-->

                                    </div> <!--End Container-->
                                </div>
                        </div>
                    </div>
                </div>
                <script language="JavaScript" type="text/javascript" src="{{ asset('Asset2/JS/jquery-1.11.1.min.js') }}"></script>
                <script async src="{{ asset('Asset2/JS/homeloginprofil/index.js') }}"></script>
                @include('js.ajax')
                <a href="{{ url('upload/blog') }}" class="tweet-btn">Tweet</a>
            </div>
            <!-- Akhir S&T -->

            <!-- Sudah login -->
            @if (Auth::check())
                <!-- Profile Login -->
                <div class="profil">
                    <div class="dropdown">
                        <a class="btn text-white dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="{{ asset('storage/' . Auth::user()->imgpp) }}" width="50" alt=""
                                class="rounded-circle">
                        </a>
                        <ul class="dropdown-menu">
                            <div class="profil-picture">
                                <img src="{{ asset('storage/' . Auth::user()->imgpp) }}" width="50" alt=""
                                    class="rounded-circle">
                                <span class="username">
                                    <h4>{{ '@' . Auth::user()->username }}</h4>
                                    <h6>{{ Auth::user()->email }}</h6>
                                </span>
                            </div>
                            <li><a class="dropdown-item"
                                    href="{{ url('user/@' . Auth::user()->username . '/profile') }}"><button>
                                        <div class="user-icon"><img src="{{ asset('Asset2/img/assets/user.png') }}"
                                                alt="">
                                        </div>Profile
                                    </button></a></li>
                            <li>
                                <a class="dropdown-item" href="#"><button>
                                        <div class="saved"><img
                                                src="{{ asset('Asset2/img/assets/save-instagram.png') }}"
                                                alt=""></div>Favorite
                                    </button></a>
                            </li>
                            <li class="dropdown-item" href="">
                                <a href="{{ url('register/login') }}">
                                    <button>
                                        <div class="rotate">
                                            <img src="{{ asset('Asset2/img/assets/rotate.png') }}" alt="">
                                        </div>Change Account
                                    </button>
                                </a>
                            </li>
                            <li class="dropdown-item"><a href="{{ url('logout') }}"><button>
                                        <div class="exit"><img
                                                src="{{ asset('Asset2/img/assets/Sign_out_squre_light.png') }}"
                                                alt=""></div>Log Out
                                    </button></a></li>
                        </ul>
                    </div>
                </div>
                <!-- Akhir profile login -->
                <!-- Belum login -->
            @else
                <!-- Profile Guest -->
                <div class="profil">
                    <div class="dropdown">
                        <a class="btn text-white dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="{{ asset('Asset2/img/guest.jpg') }}" alt="" width="50"
                                class="rounded-circle">
                        </a>
                        <ul class="dropdown-menu">
                            <div class="profil-picture">
                                <img src="{{ asset('Asset2/img/guest.jpg') }}" alt="" width="50"
                                    class="rounded-circle">
                                <span class="username">
                                    <h4>Guest</h4>
                                </span>
                            </div>
                            <li><a class="dropdown-item"
                                    href="{{ url('register/login') }}"><button>Login</button></a>
                            </li>
                            <li><a class="dropdown-item"
                                    href="{{ url('register/signup') }}"><button>SignUp</button></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Akhir Profile Guest -->
            @endif
        </div>
        <!-- Akhir Navbar kanan -->
    </div>
</div>

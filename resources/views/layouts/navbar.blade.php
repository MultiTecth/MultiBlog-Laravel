    <div class="jumbotron">
        <div class="navbar">
            <div class="nav-menu">
                <div class="text">
                    <h2>MultiBlog</h2>
                </div>
                <!-- <div class="strip">|</div> -->
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
                                <li><a class="dropdown-item" href="/FrontEnd/MainBlog/Home News/index.html">News</a>
                                </li>
                                <li><a class="dropdown-item" href="/FrontEnd/MainBlog/Home Novel/index.html">Novel</a>
                                </li>
                                <!-- <li><a class="dropdown-item" href="#">Poems</a></li> -->
                                <li><a class="dropdown-item" href="/FrontEnd/MainBlog/Home Short Story/index.html">Short
                                        Story</a></li>
                            </ul>
                        </div>
                    </ul>
                </div>
            </div>
            <div class="more-menu-cnt">
                <div class="more-menu">
                    <div class="search-container">
                        <img src="{{ asset('Assets/icon/searchpng.png') }}" alt="">
                        <input type="text" class="search-input" placeholder="Search...">
                        <div class="search-dropdown">
                            <div class="item">
                                <div class="search-dropdown-item" onclick="browseTab()">
                                    <h6>Browse</h6>
                                    <ul>
                                        <a href="/FrontEnd/MainBlog/Home News/index.html">
                                            <li>News</li>
                                        </a>
                                    </ul>
                                </div>
                                <div class="search-dropdown-item" onclick="userTab()">
                                    <h6>User</h6>
                                    <ul>
                                        <li><a href="/FrontEnd/MainBlog/Home News/index.html">News</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <script src="{{ asset('Assets/JS/homeloginprofil/index.js') }}"></script>
                    <a href="{{ url('upload/blog') }}"><button
                            class="tweet-btn">Tweet</button></a>
                </div>
                @if (Auth::check())
                    <div class="profil">
                        <div class="dropdown">
                            <a class="btn text-white dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                @if (Auth::user()->imgpp)
                                    <img src="{{ asset('storage/' . Auth::user()->imgpp) }}" alt=""
                                        width="50" class="rounded-circle">
                            </a>
                            <ul class="dropdown-menu">
                                <div class="profil-picture">
                                    <img src="{{ asset('storage/' . Auth::user()->imgpp) }}" alt=""
                                        width="50" class="rounded-circle">
                                @else
                                    <img src="{{ asset('Assets/profile/⠀ 1.png')}}" alt=""
                                        width="50" class="rounded-circle">
                                    </a>
                                    <ul class="dropdown-menu">
                                        <div class="profil-picture">
                                            <img src="{{ asset('Assets/profile/⠀ 1.png')}}" alt=""
                                                width="50" class="rounded-circle">
                @endif

                <span class="username">
                    <h4>{{ Auth::user()->name }}</h4>
                    <h6>{{ Auth::user()->email }}</h6>
                </span>
            </div>
            <li><a class="dropdown-item" href="{{ url('user/@' . Auth::user()->name) }}"><button>
                        <div class="user-icon"><img src="{{ asset('Assets/icon/user.png') }}" alt=""></div>
                        Profile
                    </button></a></li>
            <li><a class="dropdown-item" href=""><button>
                        <div class="saved"><img src="{{ asset('Assets/icon/save-instagram.png') }}" alt="">
                        </div>Libary
                    </button></a></li>
            <li class="dropdown-item"><a href="{{ url('changeAcc') }}"><button>
                        <div class="rotate"><img src="{{ asset('Assets/icon/rotate.png') }}" alt="">
                        </div>Change Account
                    </button></a></li>
            <li class="dropdown-item"><a href="{{ url('logout') }}"><button>
                        <div class="exit"><img src="{{ asset('Assets/icon/Sign_out_squre_light.png') }}"
                                alt=""></div>Log Out
                    </button></a></li>
            </ul>
        </div>
    </div>
@else
    <div class="profil">
        <div class="dropdown">
            <a class="btn text-white dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                <img src="{{ asset('Assets/profile/⠀ 1.png') }}" alt="" width="50" class="rounded-circle">
            </a>
            <ul class="dropdown-menu">
                <div class="profil-picture">
                    <img src="{{ asset('Assets/profile/⠀ 1.png') }}" alt="" width="50"
                        class="rounded-circle">
                    <span class="username">
                        <h4>GuestUser</h4>
                    </span>
                </div>
                <li><a class="dropdown-item" href="{{ url('register/login') }}"><button>Login</button></a></li>
                <li><a class="dropdown-item" href="{{ url('register/signup') }}"><button>SignUp</button></a></li>
            </ul>
        </div>
    </div>
    @endif

    </div>
    </div>
    </div>

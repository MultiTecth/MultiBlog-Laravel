<div class="jumbotron">
        <div class="navbar">

            <!-- Navbar kiri -->
            <div class="nav-menu">
                <div class="text">
                    <a href="{{ url('home') }}">
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
                                <li><a class="dropdown-item" href="{{ url('home/news' ) }}">News</a></li>
                                <li><a class="dropdown-item" href="{{ url('home/Novel') }}">Novel</a></li>
                                <li><a class="dropdown-item" href="{{ url('home/Short Story')}}">Short Story</a></li>
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
                    <div class="search">
                        <span class="icon"><img src="{{ asset('Asset2/img/assets/iconpack/searchpng.png') }}"
                                alt=""></span>
                        <input type="search" placeholder="Search">
                    </div>
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
                                    <img src="{{ asset('storage/' . Auth::user()->imgpp) }}" width="50"
                                        alt="" class="rounded-circle">
                                    <span class="username">
                                        <h4>{{ '@' . Auth::user()->username }}</h4>
                                        <h6>{{ Auth::user()->email }}</h6>
                                    </span>
                                </div>
                                <li><a class="dropdown-item" href="{{ url('user/@' . Auth::user()->username) }}"><button>
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

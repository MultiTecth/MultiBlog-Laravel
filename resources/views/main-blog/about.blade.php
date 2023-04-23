<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About</title>
    <link rel="stylesheet" href="{{ asset('Assets/css/home/about/index.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap-5/css/bootstrap.min.css') }}">
</head>

<body>
    <div class="jumbotron">
        <div class="navbar">
            <div class="nav-menu">
                <div class="text">
                    <h2>MultiBlog</h2>
                </div>
                <!-- <div class="strip">|</div> -->
                <div class="list">
                    <ul class="ul-list">
                        <li>
                            <a href="{{ url('home') }}">Home</a>
                            <!-- <a href="/FrontEnd/MainBlog/Home/home-login-profil/index.html">Home</a> -->
                        </li>
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
                                <li><a class="dropdown-item" href="/FrontEnd/MainBlog/Home Short Story/index.html">Short
                                        Story</a></li>
                            </ul>
                        </div>
                    </ul>
                </div>
            </div>
            <div class="more-menu-cnt">
                <div class="more-menu">
                    <div class="search">
                        <span class="icon"><img src="{{ asset('Assets/icon/searchpng.png') }}" alt=""></span>
                        <input type="search" placeholder="Search">
                    </div>
                    <a href="http://localhost:3000/FrontEnd/Post/postPage/process_text.php"><button
                            class="tweet-btn">Tweet</button></a>
                </div>
                {{-- belum login --}}
                @if (Auth::check())
                    <div class="profil">
                        <div class="dropdown">
                            <a class="btn text-white dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="{{ asset('storage/' . Auth::user()->imgpp) }}" alt="" width="50"
                                    class="rounded-circle">
                            </a>
                            <ul class="dropdown-menu">
                                <div class="profil-picture">
                                    <img src="{{ asset('storage/' . Auth::user()->imgpp) }}" alt=""
                                        width="50" class="rounded-circle">
                                    <span class="username">
                                        <h4>{{ Auth::user()->name }}</h4>
                                        <h6>{{ Auth::user()->email }}</h6>
                                    </span>
                                </div>
                                <li><a class="dropdown-item" href="{{ url('user/@' . Auth::user()->name) }}"><button>
                                            <div class="user-icon"><img src="{{ asset('Assets/icon/user.png') }}"
                                                    alt=""></div>
                                            Profile
                                        </button></a></li>
                                <li><a class="dropdown-item" href="#"><button>
                                            <div class="saved"><img
                                                    src="{{ asset('Assets/icon/save-instagram.png') }}" alt="">
                                            </div>Libary
                                        </button></a></li>
                                <li class="dropdown-item"><a href="{{ url('changeAcc') }}"><button>
                                            <div class="rotate"><img src="{{ asset('Assets/icon/rotate.png') }}"
                                                    alt=""></div>Change
                                            Account
                                        </button></a></li>
                                <li class="dropdown-item"><a href="{{ url('logout') }}"><button>
                                            <div class="exit"><img
                                                    src="{{ asset('Assets/icon/Sign_out_squre_light.png') }}"
                                                    alt=""></div>Log Out
                                        </button></a></li>
                            </ul>
                        </div>
                    </div>
                @else
                    <div class="profil">
                        <div class="dropdown">
                            <a class="btn text-white dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="{{ asset('Assets/profile/⠀ 1.png')}}" alt="" width="50" class="rounded-circle">
                            </a>
                            <ul class="dropdown-menu">
                                <div class="profil-picture">
                                    <img src="{{ asset('Assets/profile/⠀ 1.png')}}" alt="" width="50"
                                        class="rounded-circle">
                                    <span class="username">
                                        <h4>GuestUser</h4>
                                    </span>
                                </div>
                                <li><a class="dropdown-item"
                                        href="{{ url('register/login') }}"><button>Login</button></a></li>
                                <li><a class="dropdown-item"
                                        href="{{ url('register/signup') }}"><button>SignUp</button></a></li>
                            </ul>
                        </div>
                    </div>
                @endif

                <!-- Profil User Login -->

            </div>
        </div>


    </div>
    </div>
    <div class="jmb-container"></div>
    </div>
    <div class="container-content">
        <!-- About Card -->
        <div class="about-card">
            <div class="card-container">
                <center>
                    <h2>About Us</h2>
                </center>
                <!-- <center><hr width="150"></center> -->
                <center>
                    <p>
                        Kami membuat Blog ini yang bertujuan untuk membuath sebuah situs web blog yang memungkinkan
                        pengguna untuk membuat dan mempublikasikan konten mereka sendiri. Situs web ini akan menyediakan
                        platform bagi blogger untuk berbagi ide, pendapat, dan pengalaman mereka dengan audiens yang
                        lebih luas. Pengguna akan dapat membuat akun, masuk, dan membuat postingan yang akan
                        dipublikasikan di situs web. Situs web ini juga akan memiliki fitur seperti berkomentar dan
                        berbagi, sehingga menjadi komunitas yang interaktif.
                    </p>
                </center>
            </div>
        </div>

        <!-- Container-Crew -->
        <div class="crew">
            <h2>OUR CREW</h2>
            <div class="crew-container">
                <div class="card-crew">
                    <img src="{{ asset('Assets/profile/About-Picture/IMAGE 2023-04-15 09:10:27.jpg') }}"
                        alt="">
                    <h5>Shaquille</h5>
                    <p>Back End Developer</p>
                </div>

                <div class="card-crew">
                    <img src="{{ asset('Assets/profile/About-Picture/IMAGE 2023-04-15 09:10:33.jpg') }}"
                        alt="">
                    <h5>Raynato Liernardy</h5>
                    <p>Full Stack Developer</p>
                </div>

                <div class="card-crew">
                    <img src="{{ asset('Assets/profile/About-Picture/IMAGE 2023-04-15 09:10:51.jpg') }}"
                        alt="">
                    <h5>Sean Michael</h5>
                    <p>Full Stack Developer</p>
                </div>

                <div class="card-crew">
                    <img src="{{ asset('Assets/profile/About-Picture/IMAGE 2023-04-15 09:10:43.jpg') }}"
                        alt="">
                    <h5>Audrey Dwi Putry</h5>
                    <p>UI / UX Designer</p>
                </div>

                <div class="card-crew">
                    <img src="{{ asset('Assets/profile/About-Picture/IMAGE 2023-04-15 09:10:47.jpg') }}"
                        alt="">
                    <h5>Cheche Karina Putri Aslam</h5>
                    <p>UI / UX Designer</p>
                </div>

                <div class="card-crew">
                    <img src="{{ asset('Assets/profile/About-Picture/IMAGE 2023-04-15 09:10:40.jpg') }}"
                        alt="">
                    <h5>Muhammad Sabda Ramadhan</h5>
                    <p>Front end developer</p>
                </div>
            </div>
        </div>

    </div>
    @include('layouts.footer')
    <!-- SCRIPT -->
    <script src="{{ asset('bootstrap-5/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>

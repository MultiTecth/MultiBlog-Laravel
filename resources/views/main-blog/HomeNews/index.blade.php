<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>News</title>
    <link rel="stylesheet" href="{{ asset('Assest/css/home/homenwes/index.css')}}">
    <link rel="stylesheet" href="{{ asset('bootstrap-5/css/bootstrap.min.css')}}">
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
                        <li><a href="{{ url('home') }}">Home</a></li>
                        <li><a href="{{ url('home/about') }}">About</a></li>
                        <div class="dropdown-center">
                            <button class="btn text-white dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Browse
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">News</a></li>
                                <li><a class="dropdown-item" href="/FrontEnd/MainBlog/Home Novel/index.html">Novel</a></li>
                                <li><a class="dropdown-item" href="/FrontEnd/MainBlog/Home Short Story/index.html">Short Story</a></li>
                            </ul>
                        </div>
                    </ul>
                </div>
            </div>
            <div class="more-menu-cnt">
                <div class="more-menu">
                    <div class="search">
                        <span class="icon"><img src="{{ asset('Assest/icon/searchpng.png')}}" alt=""></span>
                        <input type="search" placeholder="Search">
                    </div>
                    <a href="http://localhost:3000/FrontEnd/Post/postPage/process_text.php"><button class="tweet-btn">Tweet</button></a>
                </div>
                <div class="profil">
                    <div class="dropdown">
                        <a class="btn text-white dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <img src="/Home/homepage/assets/iconpack/blank-profile-picture-973460_640.webp" alt="" width="50"
                                class="rounded-circle">
                        </a>
                        <ul class="dropdown-menu">
                            <div class="profil-picture">
                                <img src="/Home/homepage/assets/iconpack/blank-profile-picture-973460_640.webp" alt="" width="50"
                                    class="rounded-circle">
                                <span class="username">
                                    <h4>GuestUser</h4>
                                </span>
                            </div>
                            <li><a class="dropdown-item" href="#"><button>Login</button></a></li>
                            <li><a class="dropdown-item" href="#"><button>SignUp</button></a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Profil User Login -->
            <!-- <div class="profil">
                <div class="dropdown">
                    <a class="btn text-white dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <img src="./assest/profillogin/❝ save __ follow ❞ 2.png" alt="" width="50"
                            class="rounded-circle">
                    </a>
                    <ul class="dropdown-menu">
                        <div class="profil-picture">
                            <img src="./assest/profillogin/❝ save __ follow ❞ 2.png" alt="" width="50"
                                class="rounded-circle">
                            <span class="username">
                                <h4>Sjunn</h4>
                                <h6>audreyyy@gmail.com</h6>
                            </span>
                        </div>
                        <li><a class="dropdown-item" href="#"><button><div class="user-icon"><img src="./assest/user.png" alt=""></div>Profile</button></a></li>
                        <li><a class="dropdown-item" href="#"><button><div class="saved"><img src="./assest/save-instagram.png" alt=""></div>Favorite</button></a></li>
                        <li class="dropdown-item" href=""><button><div class="rotate"><img src="./assest/rotate.png" alt=""></div>Change Account</button></li>
                        <li class="dropdown-item"><a href="/sginup/sginup.html"><button><div class="exit"><img src="./assest/Sign_out_squre_light.png" alt=""></div>Log Out</button></a></li>
                    </ul>
                </div>
            </div>
        </div> -->

        </div>
    </div>
    <div class="jmb-container">
        <img src="https://i.pinimg.com/564x/45/c0/50/45c050020a29e4e7869f17bfab23eade.jpg" alt="">
    </div>
    </div>

    <div class="container-content">
        <div class="center-content">
            <!-- <div class="title">
                <h3>For You</h3>
            </div> -->
            <div class="news">
                <div class="news-title">
                    <h3>NEWS </h3><span class="line"></span>
                </div>
                <div class="card-container">
                    <!-- Card1 -->
                    <div class="card">
                        <a href="./UpdateBerita/news.html">
                            <div class="image"><center>
                                <img
                                    src="/Home/homepage/assets/imagenews/polisi-tangkap-2-remaja-tawuran-pakai-batu-dibungkus-sarung-0uHRPya0uP 1.png"
                                    alt="">
                            </center></div>
                            <div class="text">
                                <p>
                                    Polisi Tangkap 2 Remaja Tawuran Pakai Batu Dibungkus Sarung
                                </p>
                            </div>
                        </a>
                    </div>

                    <!-- Card2 -->
                    <div class="card">
                        <div class="image">
                            <center><img src="/Home/homepage/assets/imagenews/56-1-1628768698 1.png" alt=""></center>
                        </div>
                        <div class="text">
                            <p>
                                Kebijakan Politik Luar Negeri Perekonomian Indonesia
                            </p>
                        </div>
                    </div>

                    <!-- Card3 -->
                    <div class="card">
                        <div class="image"><center>
                            <img
                                src="/Home/homepage/assets/imagenews/flp-tolak-timnas-israel-fifa-u20-2023-768x511-64214ed94addee4dc04e1d22 1.png"
                                alt="">
                        </center></div>
                        <div class="text">
                            <p>
                                Ramai-ramai Tolak Timnas Israel ke Indonesiah
                            </p>
                        </div>
                    </div>

                    <!-- Card4 -->
                    <!-- <div class="card">
                        <div class="image"><center>
                            <img
                                src="/Home/homepage/assets/imagenews/flp-tolak-timnas-israel-fifa-u20-2023-768x511-64214ed94addee4dc04e1d22 1.png"
                                alt="">
                        </center></div>
                        <div class="text">
                            <p>
                                Ramai-ramai Tolak Timnas Israel ke Indonesiah
                            </p>
                        </div>
                    </div> -->

                    <!-- Card5 -->
                    <!-- <div class="card">
                        <div class="image"><center>
                            <img
                                src="/Home/homepage/assets/imagenews/flp-tolak-timnas-israel-fifa-u20-2023-768x511-64214ed94addee4dc04e1d22 1.png"
                                alt="">
                        </center></div>
                        <div class="text">
                            <p>
                                Ramai-ramai Tolak Timnas Israel ke Indonesiah
                            </p>
                        </div>
                    </div> -->

                    <!-- Close Card -->
                </div> <!-- Closing tag container card -->
            </div>
        </div> <!-- Closing tag news -->

        <div class="right-content">
            <div class="title">
                <h3>Saved</h3>
            </div>
            <div class="content">
                <div class="card-container-right">
                    <!-- Card1 -->
                    <!-- <div class="card">
                        <div class="image"><img src="./assets/savedprofil/203677881-416-k974890 1.png" alt=""></div>
                        <div class="text">
                            <p>
                                The baby swap
                            </p>
                        </div>
                    </div> -->

                    <!-- Card2 -->
                    <!-- <div class="card">
                        <div class="image"><img src="./assets/savedprofil/267373976-352-k308139 1.png" alt=""></div>
                        <div class="text">
                            <p>
                                His Defiant Concubine
                            </p>
                        </div> -->
                    </div><!-- Close Card -->
                </div> <!-- Closing tag container card -->
            </div>
        </div>
    </div>
    <footer>
        <div class="footer-bottom">
            <p>© 2023 PT. MULTITECH SOLUTION MAKASSAR</p>
        </div>
    </footer>
    <!-- SCRIPT -->
    <script src="/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

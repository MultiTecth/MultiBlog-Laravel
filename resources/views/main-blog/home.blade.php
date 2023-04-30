<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link rel="stylesheet" href="{{ asset('Asset2/css/blog-main/home/homepage.css') }}">
    <link rel="stylesheet" href="{{ asset('Asset2/css/nav.css') }}">
    <link rel="stylesheet" href="{{ asset('Asset2/css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap-5/css/bootstrap.min.css') }}">
</head>

<body>
    <!-- Navbar -->
    @include('layouts.navbar')
    <!-- Akhir Navbar -->

    <!-- Background -->
    <div class="jmb-container">
        <img src="{{ asset('Asset2/img/assets/background.jpg') }}" alt="">
    </div>
    <!-- Akhir Background -->

    <!-- Content -->
    <div class="container-content">

        <!-- Friendlist Container -->
        <div class="left-content">
            <div class="title">
                <h3>Followed</h3>
            </div>

            <div class="content">
                <div class="card-container-left">
                    <!-- Card1 -->

                    <a class="card" href="../../users/@/">
                        <div class="image">
                            <img src="" alt="">
                        </div>
                        <div class="text">
                            <p>
                            <h6 class="friend-username"></h6>
                            <p></p>
                            </p>
                        </div>
                    </a>

                </div> <!-- Closing tag container card -->
            </div>
        </div>
        <!-- Akhir Friendlist Container -->

        <!-- Beranda -->
        <div class="center-content">
            <div class="title">
                <h3>For You</h3>
            </div>
            {{-- <div class="blogs">
                <div class="blogs-title">
                    <h3>FOLLOWED </h3><span class="line"></span>
                </div>
                <div class="card-container">
                    @foreach ($valueNews as $item)
                        <a class="card" href="{{ url('tweet/' . $item['categoryPost'] . '/' . $item['idPost']) }}">
                            <div class="image"><img src="{{ asset('storage/' . $item['thumbnailPost']) }}"
                                    alt=""></div>
                            <div class="text">
                                <p>
                                    {{ $item['titlePost'] }}
                                </p>
                                <small>
                                    <img src="{{ asset('storage/' . $item['imgUserPost']) }}" width="20" alt="" class="rounded-circle">
                                    {{ $item['username'] }}
                                </small>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div> --}}
            <div class="news">
                <div class="news-title">
                    <h3>NEWS </h3><span class="line"></span>
                </div>
                <div class="card-container">
                    @foreach ($values as $item)
                        @if ($item['categoryPost'] == 'News')
                            <!-- Card1 -->
                            <a class="card"
                                href="{{ url('tweet/' . $item['categoryPost'] . '/' . $item['idPost']) }}">
                                <div class="image"><img src="{{ asset('storage/' . $item['thumbnailPost']) }}"
                                        alt=""></div>
                                <div class="text">
                                    <p>
                                        {{ $item['titlePost'] }}
                                    </p>
                                    <small>
                                        <img src="{{ asset('storage/' . $item['imgUserPost']) }}" width="20"
                                            alt="" class="rounded-circle">
                                        {{ $item['username'] }}
                                    </small>
                                </div>
                            </a>
                        @endif
                    @endforeach
                    <!-- Close Card -->
                </div> <!-- Closing tag container card -->
            </div>
            <div class="news">
                <div class="news-title">
                    <h3>NOVEL </h3><span class="line"></span>
                </div>
                <div class="card-container">
                    @foreach ($values as $item)
                        @if ($item['categoryPost'] == 'Novel')
                            <!-- Card1 -->
                            <a class="card"
                                href="{{ url('tweet/' . $item['categoryPost'] . '/' . $item['idPost']) }}">
                                <div class="image"><img src="{{ asset('storage/' . $item['thumbnailPost']) }}"
                                        alt=""></div>
                                <div class="text">
                                    <p>
                                        {{ $item['titlePost'] }}
                                    </p>
                                    <small>
                                        <img src="{{ asset('storage/' . $item['imgUserPost']) }}" width="20"
                                            alt="" class="rounded-circle">
                                        {{ $item['username'] }}
                                    </small>
                                </div>
                            </a>
                        @endif
                    @endforeach
                    <!-- Close Card -->
                </div> <!-- Closing tag container card -->
            </div>
            <div class="news">
                <div class="news-title">
                    <h3>Pendidikan </h3><span class="line"></span>
                </div>
                <div class="card-container">
                    @foreach ($values as $item)
                        @if ($item['categoryPost'] == 'Pendidikan')
                            <!-- Card1 -->
                            <a class="card"
                                href="{{ url('tweet/' . $item['categoryPost'] . '/' . $item['idPost']) }}">
                                <div class="image"><img src="{{ asset('storage/' . $item['thumbnailPost']) }}"
                                        alt=""></div>
                                <div class="text">
                                    <p>
                                        {{ $item['titlePost'] }}
                                    </p>
                                    <small>
                                        <img src="{{ asset('storage/' . $item['imgUserPost']) }}" width="20"
                                            alt="" class="rounded-circle">
                                        {{ $item['username'] }}
                                    </small>
                                </div>
                            </a>
                        @endif
                    @endforeach
                    <!-- Close Card -->
                </div> <!-- Closing tag container card -->
            </div>
            <div class="news">
                <div class="news-title">
                    <h3>Cerpen </h3><span class="line"></span>
                </div>
                <div class="card-container">
                    @foreach ($values as $item)
                        @if ($item['categoryPost'] == 'Short Story')
                            <!-- Card1 -->
                            <a class="card"
                                href="{{ url('tweet/' . $item['categoryPost'] . '/' . $item['idPost']) }}">
                                <div class="image"><img src="{{ asset('storage/' . $item['thumbnailPost']) }}"
                                        alt=""></div>
                                <div class="text">
                                    <p>
                                        {{ $item['titlePost'] }}
                                    </p>
                                    <small>
                                        <img src="{{ asset('storage/' . $item['imgUserPost']) }}" width="20"
                                            alt="" class="rounded-circle">
                                        {{ $item['username'] }}
                                    </small>
                                </div>
                            </a>
                        @endif
                    @endforeach
                    <!-- Close Card -->
                </div> <!-- Closing tag container card -->
            </div>

        </div>
        <!-- Akhir Beranda -->

        <!-- Save Content -->
        <div class="right-content">
            <div class="title">
                <h3>Saved</h3>
            </div>
            <div class="content">
                <div class="card-container-right">

                    <a class="card" href="../../tweet/UpdateBerita/news.php?id=">
                        <div class="image">
                            <img src="" alt="">
                        </div>
                        <div class="text">
                            <h4></h4>
                        </div>
                    </a>



                </div><!-- Close Card -->
            </div> <!-- Closing tag container card -->
        </div>
    </div>
    <!-- Akhir Save Content -->

    </div>
    <!-- Akhir Content -->

    <!-- Footer -->
    @include('layouts.footer')
    <!-- Akhir Footer -->

    <!-- SCRIPT -->
    <!-- untuk dropdown -->
    <script src="{{ asset('bootstrap-5/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>

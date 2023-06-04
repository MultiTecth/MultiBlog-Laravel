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
                    @if (!isset($following))
                        <div class="card">
                            <div class="image">
                            </div>
                            <div class="text">
                                <p>
                                <h6 class="friend-username fw-normal">Login dulu yah baru cari teman....</h6>
                                </p>
                            </div>
                        </div>
                    @else
                        @if ($following->count() > 0)
                            @foreach ($following as $item)
                                <a class="card" href="{{ url('user/@' . $item->username . '/profile') }}">
                                    <div class="image">
                                        <img src="{{ asset('storage/' . $item->imgpp) }}" width='50' alt=''
                                            class='rounded-circle'>
                                    </div>
                                    <div class="text">
                                        <p>
                                        <h6 class="friend-username fw-normal">{{ '@' . $item->username }}</h6>
                                        <p>{{ $item->bio }}</p>
                                        </p>
                                    </div>
                                </a>
                            @endforeach
                        @else
                            <div class="card">
                                <div class="image"></div>
                                <div class="text">
                                    <p>
                                    <h6 class="friend-username fw-normal">Cari teman di search ya....</h6>
                                    </p>
                                </div>
                            </div>
                        @endif
                    @endif
                </div> <!-- Closing tag container card -->
            </div>
        </div>
        <!-- Akhir Friendlist Container -->

        <!-- Beranda -->
        <div class="center-content">
            <div class="title">
                <h3>For You</h3>
            </div>
            <div class="news">
                <div class="news-title">
                    <h3>NEWS </h3><span class="line"></span>
                </div>
                <div class="card-container">
                    @isset($dataNews)
                        @foreach ($dataNews as $item)
                            @if ($item['categoryPost'] == 'News')
                                <!-- Card1 -->
                                <a class="card"
                                    href="{{ url('tweet/' . $item['categoryPost'] . '/' . $item['idPost']) }}">
                                    <div class="image"><img src="{{ asset('storage/' . $item['thumbnailPost']) }}"
                                            alt="" width="115"></div>
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
                    @endisset
                    <!-- Close Card -->
                </div> <!-- Closing tag container card -->
            </div>
            <div class="news">
                <div class="news-title">
                    <h3>NOVEL </h3><span class="line"></span>
                </div>
                <div class="card-container">
                    @isset($dataNovel)
                        @foreach ($dataNovel as $item)
                            @if ($item['categoryPost'] == 'Novel')
                                <!-- Card1 -->
                                <a class="card"
                                    href="{{ url('tweet/' . $item['categoryPost'] . '/' . $item['idPost']) }}">
                                    <div class="image"><img src="{{ asset('storage/' . $item['thumbnailPost']) }}"
                                            alt="" width="115"></div>
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
                    @endisset
                    <!-- Close Card -->
                </div> <!-- Closing tag container card -->
            </div>
            <div class="news">
                <div class="news-title">
                    <h3>Pendidikan </h3><span class="line"></span>
                </div>
                <div class="card-container">
                    @isset($dataPendidikan)
                        @foreach ($dataPendidikan as $item)
                            @if ($item['categoryPost'] == 'Pendidikan')
                                <!-- Card1 -->
                                <a class="card"
                                    href="{{ url('tweet/' . $item['categoryPost'] . '/' . $item['idPost']) }}">
                                    <div class="image"><img src="{{ asset('storage/' . $item['thumbnailPost']) }}"
                                            alt="" width="115"></div>
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
                    @endisset
                    <!-- Close Card -->
                </div> <!-- Closing tag container card -->
            </div>
            <div class="news">
                <div class="news-title">
                    <h3>Cerpen </h3><span class="line"></span>
                </div>
                <div class="card-container">
                    @isset($dataCerpen)
                        @foreach ($dataCerpen as $item)
                            @if ($item['categoryPost'] == 'Short Story')
                                <!-- Card1 -->
                                <a class="card"
                                    href="{{ url('tweet/' . $item['categoryPost'] . '/' . $item['idPost']) }}">
                                    <div class="image"><img src="{{ asset('storage/' . $item['thumbnailPost']) }}"
                                            alt="" width="115"></div>
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
                    @endisset
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
                    @if (!isset($savedPost))
                        <div class="card">
                            <div class="image">
                            </div>
                            <div class="text">
                                <p>
                                <h6 class="friend-username fw-normal text-white">Login dulu yah baru simpan blog....
                                </h6>
                                </p>
                            </div>
                        </div>
                    @else
                        @if (count($savedPost) > 0)
                            @foreach ($savedPost as $item)
                                <a class="card"
                                    href="{{ url('tweet/' . $item->post->category . '/' . $item->post->id) }}">
                                    <div class="image">
                                        <img src="{{ asset('storage/' . $item->post->thumbnail) }}" alt=""
                                            width="115">
                                    </div>
                                    <div class="text">
                                        <h4>{{ $item->post->title }}</h4>
                                    </div>
                                </a>
                            @endforeach
                        @else
                            <div class="card">
                                <div class="image">
                                </div>
                                <div class="text">
                                    <p>
                                    <h6 class="friend-username fw-normal text-white">Cari blog di search ya....</h6>
                                    </p>
                                </div>
                            </div>
                        @endif
                    @endif
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
    <script async src="{{ asset('bootstrap-5/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>

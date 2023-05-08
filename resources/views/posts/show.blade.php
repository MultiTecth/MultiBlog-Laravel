<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Posted</title>
    <link rel="stylesheet" href="{{ asset('Asset2/css/postedpage/index.css') }}">
    <link rel="stylesheet" href="{{ asset('Asset2/css/nav.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap-5/css/bootstrap.min.css') }}">
</head>

<body>
    @include('layouts.navbar')
    <div class="jmb-container"></div>

    <div class="container-content">
        <div class="content">
            <a href="{{ url('home') }}"><span class="back-icon"><img src="{{ asset('Asset2/img/icon/Back.png') }}"
                        alt=""></span></a>
            <div class="post">
                <!-- box content -->
                <div class="box-content">
                    <a href="{{ url('user/@' . $data['username'] . '/profile') }}">
                        <div class="profil-picture">
                            <img src="{{ asset('storage/' . $data['imgpp']) }}" alt="" width="50"
                                class="rounded-circle">
                            <span class="username">
                                <h4>{{ '@' . $data['username'] }}</h4>
                                <h6>{{ $data['email'] }}</h6>
                            </span>
                        </div>
                        <!--end profil-->
                    </a>
                    <div class="blog-text">
                        <h3 id="judul">{{ $data['title'] }}</h3>
                        <div id="editor">
                            <div class="image"><img src="{{ asset('storage/' . $data['thumbnail']) }}" alt="gambar">
                            </div>
                            <br>
                            <div class="text-white">{!! $data['description'] !!}</div>
                            <div class="tags" id="tags">
                                <span id="tag">#Lorem, ipsum.</span>
                                <span id="tag">#Lorem, ipsum.</span>
                                <span id="tag">#Lorem, ipsum.</span>
                            </div>
                            <div class="category">
                                <span class="category" id="cat">{{ $data['category'] }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="bottom-menu">
                        <ul>
                            <li><img src="{{ asset('Asset2/img/icon/Vector (1).png') }}" alt=""> <span
                                    class="number">0</span> </li>
                            <li><img src="{{ asset('Asset2/img/icon/Vector.png') }}" alt=""> <span
                                    class="number">0</span> </li>
                            <li>
                                @if ($data['isSaved'])
                                    {{-- <form action="{{ url('tweet/' . $data['postId'] . '/' . $data['category'] . '/unsave') }}" method="POST"> --}}
                                    <form action="{{ url('tweet/' . $data['postId'] . '/unsave') }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" style="background: none; border: none;">
                                            <img src="{{ asset('Asset2/img/icon/Vector (2).png') }}" alt="">
                                        </button>
                                        <span class="number">{{ $savedByCount }}</span>
                                    </form>
                                @else
                                    <form action="{{ url('tweet/' . $data['postId'] . '/save') }}" method="POST">
                                        @csrf
                                        <button type="submit" style="background: none; border: none;">
                                            <img src="{{ asset('Asset2/img/icon/Vector (2).png') }}" alt="">
                                        </button>
                                        <span class="number">{{ $savedByCount }}</span>
                                    </form>
                                @endif

                            </li>
                            <li><img src="{{ asset('Asset2/img/icon/Vertical_switch_long_light.png') }}"
                                    alt=""> <span class="number">0</span> </li>
                            <li><img src="{{ asset('Asset2/img/icon/Group 62.png') }}" alt=""> <span
                                    class="number">0</span> </li>
                        </ul>
                    </div>
                </div>
                <!--end box content-->
            </div>
            <!--End Post Div-->
        </div>
    </div>
    @include('layouts.footer')
    <!-- SCRIPT -->
    <script async src="{{ asset('bootstrap-5/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>

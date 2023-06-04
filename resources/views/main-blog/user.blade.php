<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profil</title>
    <link rel="stylesheet" href="{{ asset('Asset2/css/profilpage/index.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap-5/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Asset2/css/footer.css') }}">
</head>

<body>
    <div class="jumbotron">
        <div class="navbar">
            <div class="nav-menu">
                <div class="text">
                    <h2>MultiBlog</h2>
                </div>
            </div>
            <div class="more-menu-cnt">
                <div class="more-menu">
                    <a href="{{ url('upload/blog') }}"><button class="tweet-btn">Tweet</button></a>
                </div>
                <div class="profil">
                    <div class="profile-btn">
                        <img src="{{ asset('storage/' . Auth::user()->imgpp) }}" alt="" width="50"
                            class="rounded-circle">
                        <div class="profil-text">{{ '@' . Auth::user()->username }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="jmb-container" style="background-image: url('{{ asset('Asset2/img/assets/background.jpg') }}');">
        <div class="box">
            <a href="{{ url('home') }}">
                <div class="icon-back"><img src="{{ asset('Asset2/img/icon/Back.png') }}" alt=""></div>
            </a>
        </div>
    </div>
    </div>

    <div class="container-content">
        <div class="content">
            <div class="profil-card">
                <div class="profil-box">
                    <div class="profil-picture">
                        <img src="{{ asset('storage/' . $user->imgpp) }}" alt="" width="50"
                            class="rounded-circle">
                    </div> <!-- profil end-->
                    <div class="username bio">
                        <h3>{{ '@' . $user->username }}</h3>
                        <div class="bio">
                            <span class="bio">
                                {{ $user->bio }}
                            </span>
                        </div><!-- Bio end-->
                    </div> <!-- User-name end-->
                    <div class="user-email">
                        <span class="gray">{{ $user->email }}</span>
                    </div> <!-- User-email end-->
                </div><!-- box end-->
                <div class="edit-profil">
                    @if (Auth::user()->username == $user->username)
                        <a href="{{ url('user/@' . Auth::user()->username . '/edit-profile') }}"><button>Edit
                                Profil</button></a>
                    @elseif($following)
                        <form action="{{ url('unfollow/' . $user->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">unfollow</button>
                        </form>
                    @else
                        <form action="{{ url('follow/' . $user->id) }}" method="POST">
                            @csrf
                            <button type="submit">follow</button>
                        </form>
                    @endif
                </div><!-- edit profil end-->
            </div> <!-- Profil card end -->

            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane"
                        type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Home</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="libary" data-bs-toggle="tab" data-bs-target="#libary-tab-pane"
                        type="button" role="tab" aria-controls="libary-tab-pane"
                        aria-selected="false">Libary</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="friend" data-bs-toggle="tab" data-bs-target="#friend-tab-pane"
                        type="button" role="tab" aria-controls="friend-tab-pane"
                        aria-selected="false">Friend</button>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab"
                    tabindex="0">
                    <!-- Home Tab -->
                    <div class="home-tab-container">
                        @foreach ($posts as $post)
                            <div class="home-card-content-container">
                                <!-- Copy Here -->
                                <div class="home-tab-profil" id="container-tab-profil">
                                    <img src="{{ asset('storage/' . $user->imgpp) }}" alt="" width="50"
                                        class="rounded-circle">
                                    <div class="home-tab-profile-text">
                                        <h3>{{ $user->username }}</h3>
                                        <span class="username-id">
                                            {{ $user->email }}
                                        </span>
                                    </div>
                                </div>
                                <!--home tab profile end-->
                                <div class="date-time">
                                    <p>{{ $post->created_at }}<span id="tanggal"></span></p>
                                </div>
                                <div class="post-content">
                                    <a href="{{ url('tweet/' . $post->category . '/' . $post->id) }}">
                                        <p id="text">{{ $post->title }}</p>
                                        <span class="picture" id="post-picture"><img
                                                src="{{ asset('storage/' . $post->thumbnail) }}"
                                                alt=""></span>

                                        <div class="tags">
                                            <ul>
                                                <li><a href="">#Hello</a></li>
                                                <li><a href="">#Hello</a></li>
                                                <li><a href="">#Hello</a></li>
                                            </ul>
                                            <span class="tagline">{{ $post->category }}</span>
                                        </div>
                                    </a>
                                </div>
                            </div> <!-- end Home tab / content-->
                        @endforeach
                    </div>
                </div>
                <div class="tab-pane fade" id="libary-tab-pane" role="tabpanel" aria-labelledby="libary-tab"
                    tabindex="0">
                    <!-- Container -->
                    <div class="container-libary-tab">
                        <!-- Card -->
                        @if (count($savedPost) > 0)
                            @foreach ($savedPost as $item)
                                <a class="card" href="{{ url('tweet/' . $item->post->category . '/' . $item->post->id) }}">
                                    <div class="img-card">
                                        <img src="{{ asset('storage/' . $item->post->thumbnail) }}" alt="" width="100%">
                                    </div>
                                    <div class="content">
                                        <div>
                                            <h2>{{ $item->post->title }}</h2>
                                        </div>
                                    </div>
                                </a>
                            @endforeach
                        @else
                        @endif
                        <!--End Card-->
                    </div>
                    <!--End Container-libary-tab-->
                </div>
                <div class="tab-pane fade" id="friend-tab-pane" role="tabpanel" aria-labelledby="friend-tab"
                    tabindex="0">
                    <!-- Container -->
                    <div class="container-friends-tab">
                        <!-- Card -->
                        @if (count($followers) > 0)
                            @foreach ($followers as $item)
                                <div class="card">
                                    <div class="img-card"><img src="{{ asset('storage/' . $item->imgpp) }}"
                                            alt="">
                                    </div>
                                    <div class="messange">
                                        <div class="username">
                                            <p>{{ $item->username }}</p>
                                        </div>
                                        <div class="text">{{ $item->bio }}</div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <div class="card">
                                <div class="messange">
                                    <div class="username">
                                        <p>Gak punya temen....</p>
                                    </div>
                                </div>
                            </div>
                        @endif
                        <!--End Card-->
                    </div>
                    <!--End Container-libary-tab-->
                </div>
            </div>
        </div>
    </div>
    </div>
    @include('layouts.footer')
    <!-- SCRIPT -->
    <script async src="{{ asset('bootstrap-5/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>

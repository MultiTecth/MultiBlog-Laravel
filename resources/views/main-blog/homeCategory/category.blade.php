<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>News</title>
  <link rel="stylesheet" href="{{ asset('Asset2/css/blog-main/news/index.css')}}">
  <link rel="stylesheet" href="{{ asset('Asset2/css/nav.css')}}">
  <link rel="stylesheet" href="{{ asset('Asset2css/footer.css')}}">
  <link rel="stylesheet" href="{{ asset('bootstrap-5/css/bootstrap.min.css')}}">
</head>

<body>
  <!-- Navbar -->
  @include('layouts.navbar')
  <!-- Akhir Navbar -->

  <!-- Background -->
  <div class="jmb-container">
    <img src="{{ asset('Asset2/img/assets/background.jpg')}}" alt="">
  </div>
  <!-- Akhir Background -->

  <div class="container-content">
    <div class="center-content">
      <!-- <div class="title">
        <h3>For You</h3>
      </div> -->
      <div class="news">
        <div class="news-title">
          <h3>{{ $posts->first()->category }} </h3><span class="line"></span>
        </div>
        <div class="card-container">
          <!-- Card1 -->
          @foreach ($posts as $post)
          <a href="{{ url('tweet/' . $post->category . '/' . $post->id) }}">
          <div class="card">
            <div class="image"><center>
              <img
                src="{{ asset('storage/' . $post->thumbnail)}}"
                alt="">
            </center></div>
            <div class="text">
              <p>
                {{ $post->title }}
              </p>
            </div>
          </div>
          </a>
          @endforeach

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

  <!-- Footer -->
  @include('layouts.footer')
  <!-- Akhir Footer -->

  <!-- SCRIPT -->
  <!-- untuk dropdown -->
  <script src="{{ asset('bootstrap-5/js/bootstrap.bundle.min.js')}}">
  </script>
</body>

</html>

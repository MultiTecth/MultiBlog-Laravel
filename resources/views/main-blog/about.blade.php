<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Home Update Profil</title>
  <link rel="stylesheet" href="{{ asset('Asset2/css/blog-main/about/index.css')}}">
  <link rel="stylesheet" href="{{ asset('Asset2/css/nav.css')}}">
  <link rel="stylesheet" href="{{ asset('Asset2/css/footer.css')}}">
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
    <!-- About Card -->
    <div class="about-card">
      <div class="card-container">
        <center><h2>About Us</h2></center>
        <center>
          <p>
            Kami membuat Blog ini yang bertujuan untuk membuath sebuah situs web blog yang memungkinkan pengguna untuk membuat dan mempublikasikan konten mereka sendiri. Situs web ini akan menyediakan platform bagi blogger untuk berbagi ide, pendapat, dan pengalaman mereka dengan audiens yang lebih luas. Pengguna akan dapat membuat akun, masuk, dan membuat postingan yang akan dipublikasikan di situs web. Situs web ini juga akan memiliki fitur seperti berkomentar dan berbagi, sehingga menjadi komunitas yang interaktif.
          </p>
        </center>
      </div>
    </div>

    <!-- Container-Crew -->
    <div class="crew">
      <h2>OUR CREW</h2>
      <div class="crew-container">
        <div class="card-crew">
          <img src="{{ asset('Asset2/img/picture/ddf6df1c6cb2c583b797ce4b9284100d.jpg')}}" alt="">
          <h5>Shaquille</h5>
          <p>Back End Developer</p>
        </div>

        <div class="card-crew">
          <img src="{{ asset('Asset2/img/picture/271c224b12b40b4f303a1ea94f5a5b6e.png')}}" alt="">
          <h5>Raynato Liernardy</h5>
          <p>Full Stack Developer</p>
        </div>

        <div class="card-crew">
          <img src="{{ asset('Asset2/img/picture/731d3962f8da8c9323873a26eaa86c03.png')}}" alt="">
          <h5>Sean Michael</h5>
          <p>Full Stack Developer</p>
        </div>

        <div class="card-crew">
          <img src="{{ asset('Asset2/img/picture/5a56ca68e5c2ef90d7cd36b3b3ee8533.png')}}" alt="">
          <h5>Audrey Dwi Putry</h5>
          <p>UI / UX Designer</p>
        </div>

        <div class="card-crew">
          <img src="{{ asset('Asset2/img/picture/62964ba8d5374d5775dd8d8bb13317d3 1.png')}}" alt="">
          <h5>Cheche Karina Putri Aslam</h5>
          <p>UI / UX Designer</p>
        </div>

        <div class="card-crew">
          <img src="{{ asset('Asset2/img/picture/اسراء ♡ (@esra_a823) _ TikTok 1.png')}}" alt="">
          <h5>Muhammad Sabda Ramadhan</h5>
          <p>Front end developer</p>
        </div>
      </div>
    </div>

  </div>

  <!-- Footer -->
  @include('layouts.footer')
  <!-- Akhir Footer -->

  <!-- SCRIPT -->
  <!-- untuk dropdown -->
  <script src="{{ asset('bootstrap-5/js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>

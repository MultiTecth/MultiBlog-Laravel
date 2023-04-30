<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Posted</title>
    <link rel="stylesheet" href="{{ asset('Asset2/css/postedpage/index.css')}}">
    <link rel="stylesheet" href="{{ asset('Asset2/css/nav.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap-5/css/bootstrap.min.css')}}">
</head>

<body>
    @include('layouts.navbar')
    <div class="jmb-container"></div>

    <div class="container-content">
       <div class="content">
          <a href="{{ url('home') }}"><span class="back-icon"><img src="{{ asset('Asset2/img/icon/Back.png')}}" alt=""></span></a>
         <div class="post">
          <!-- box content -->
            <div class="box-content">
                <div class="profil-picture">
                    <img src="{{ asset('storage/' . $imgpp) }}" alt="" width="50"
                        class="rounded-circle">
                    <span class="username">
                        <h4>{{ '@' . $username }}</h4>
                        <h6>{{ $email }}</h6>
                    </span>
                </div> <!--end profil-->
                <div class="blog-text">
                    <h3 id="judul">{{ $title }}</h3>
                    <div id="editor">
                        <div class="image"><img src="{{ asset('storage/' . $thumbnail) }}" alt="gambar"></div>
                        <div class="text-white">{!! Str::limit(strip_tags($description)) !!}</div>
                        <div class="tags" id="tags">
                            <span id="tag">#Lorem, ipsum.</span>
                            <span id="tag">#Lorem, ipsum.</span>
                            <span id="tag">#Lorem, ipsum.</span>
                        </div>
                        <div class="category">
                            <span class="category" id="cat">{{ $category }}</span>
                        </div>
                    </div>
                </div>
                <div class="bottom-menu">
                    <ul>
                        <li><img src="/Assest/icon/Vector (1).png" alt=""> <span class="number">0</span> </li>
                        <li><img src="/Assest/icon/Vector.png" alt=""> <span class="number">0</span> </li>
                        <li><img src="/Assest/icon/Vector (2).png" alt=""> <span class="number">0</span> </li>
                        <li><img src="/Assest/icon/Vertical_switch_long_light.png" alt=""> <span class="number">0</span> </li>
                        <li><img src="/Assest/icon/Group 62.png" alt=""> <span class="number">0</span> </li>
                    </ul>
                </div>
              </div> <!--end box content-->
         </div> <!--End Post Div-->
       </div>
    </div>
    @include('layouts.footer')
    <!-- SCRIPT -->
    <script>
        //Pemilihan warna
        CKEDITOR.on('instanceReady', function(event) {
            event.editor.on('change', function() {
            var color = event.editor.document.getBody().getStyle('editor');
            document.getElementById('editor').style.backgroundColor = editor;
            });
        });
    </script>
    <script src="/node_modules/bootstrap/js/dist/base-component.js"></script>
    <script>
        // Mengambil nilai dari localStorage
        var content = localStorage.getItem('content');
        document.getElementById('content').innerHTML = content;
    </script>
    <script src="{{ asset('bootstrap-5/js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>

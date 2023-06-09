<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Post</title>
    <link rel="stylesheet" href="{{ asset('Asset2/css/postpage/index.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap-5/css/bootstrap.min.css') }}">
</head>

<body>
    <div class="jumbotron">
        <div class="navbar">
            <h2>MultiBlog</h2>
        </div>
    </div>
    </div>
    <div class="container-content">
        <a href="{{ url('home') }}" style="text-decoration: none">
            <div class="back">
                <img src="{{ asset('Asset2/img/Expand_left_double.png') }}" alt="">
                <h2>Back</h2>
            </div>
        </a>

        <form class="content" method="post" action="{{ url('@' . Auth::user()->username . '/upload/blog') }}"
            enctype="multipart/form-data">
            @csrf

            <h2>Buat Postingan Baru</h2>
            <center>
                <div class="line"></div>
            </center>

            <div class="content-box">
                <div class="btn-upload">
                    <input type="file" class="form-control" id="img" placeholder="Enter password"
                        name="thumbnail" />
                    <button class="btn">
                        <div id="selectedBanner"></div>
                        <img src="{{ asset('Asset2/img/icon/add_media.png') }}" class="media"
                            alt="ubah gambar profile">
                        @error('thumbnail')
                            <br>
                            <span class="text-danger">{{ $errors->first('thumbnail') }}</span>
                        @enderror
                    </button>
                </div>

                <div class="post-page">
                    <div class="profil">
                        <div class="profil-container">
                            <span class="profil-picture">
                                <img src="{{ asset('storage/' . Auth::user()->imgpp) }}" alt="" width="50"
                                    class="rounded-circle">
                            </span>
                            <div class="text">
                                <h3>{{ Auth::user()->username }}</h3>
                                <span class="email">{{ Auth::user()->email }}</span>
                            </div>
                            <!--Text end-->
                        </div>
                        <!--End Profil-container-->
                        <div class="btn"><button type="submit">Bagikan</button></div>
                    </div>
                    <!--End Profil-->
                    <div class="inputan-data">
                        <div class="inpt-title">
                            <h4>Title</h4>

                            <!-- title -->
                            <input type="text" placeholder="Untitled Story" name="title" id="title"
                                autocomplete="off">
                            @error('title')
                                <br>
                                <span class="text-danger">{{ $errors->first('title') }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="desk">
                        <div class="inpt-desk">

                            <!-- textarea -->
                            <textarea id="editor" name="description"></textarea>
                            @error('description')
                                <br>
                                <span class="text-danger">{{ $errors->first('description') }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="category">
                        <h4>Category</h4>
                        <select name="category" class="dropdown-content">
                            <option value="">Pilih Opsi</option>
                            <option value="Pendidikan">Pendidikan</option>
                            <option value="News">News</option>
                            <option value="Novel">Novel</option>
                            <option value="Short Story">Short Story</option>
                        </select>
                        @error('category')
                            <br>
                            <span class="text-danger">{{ $errors->first('category') }}</span>
                        @enderror
                    </div>
        </form>
        <div class="tags">
            <h4>Tags</h4>
            <textarea></textarea>
        </div>
    </div>
    <!--Post page end-->
    </div>
    </div>
    <!--content end-->
    </div>
    <!--Container End-->
    <footer>
        <div class="footer-bottom">
            <p>© 2023 PT. MULTITECH SOLUTION MAKASSAR</p>
        </div>
    </footer>
    <!-- SCRIPT -->
    <script src="{{ asset('ckeditor5/build/ckeditor.js') }}"></script>
    <script async src="{{ asset('bootstrap-5/js/bootstrap.bundle.min.js') }}"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'), {
                toolbarGroups: [{
                        name: 'document',
                        groups: ['mode']
                    },
                    {
                        name: 'clipboard',
                        groups: ['clipboard', 'undo']
                    },
                    {
                        name: 'editing',
                        groups: ['find', 'selection', 'spellchecker']
                    },
                    {
                        name: 'forms',
                        groups: ['forms']
                    },
                    {
                        name: 'basicstyles',
                        groups: ['basicstyles', 'cleanup']
                    },
                    {
                        name: 'paragraph',
                        groups: ['list', 'indent', 'blocks', 'align', 'bidi']
                    },
                    {
                        name: 'links',
                        groups: ['links']
                    },
                    {
                        name: 'insert',
                        groups: ['insert']
                    },
                    '/',
                    {
                        name: 'styles',
                        groups: ['styles']
                    },
                    {
                        name: 'colors',
                        groups: ['colors']
                    },
                    {
                        name: 'tools',
                        groups: ['tools']
                    },
                    {
                        name: 'others',
                        groups: ['others']
                    },
                    {
                        name: 'about',
                        groups: ['about']
                    }
                ],
                stylesSet: [{
                        name: 'Blue Background',
                        element: 'span',
                        styles: {
                            'background-color': 'blue'
                        }
                    },
                    {
                        name: 'Black Font',
                        element: 'span',
                        styles: {
                            'color': 'black'
                        }
                    }
                ]
            })

            .catch(error => {
                console.error(error);
            });
    </script>
</body>

</html>

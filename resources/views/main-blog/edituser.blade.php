<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Profil</title>
    <link rel="stylesheet" href="{{ asset('Assets/assets/root.css') }}">
    <link rel="stylesheet" href="{{ asset('Assets/assets/nav.css') }}">
    <link rel="stylesheet" href="{{ asset('Assets/assets/input-profil.css') }}">
    <link rel="stylesheet" href="{{ asset('Assets/assets/profil-information.css') }}">
    <link rel="stylesheet" href="{{ asset('Assets/assets/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap-5/css/bootstrap.min.css') }}">
</head>

<body>
    <div class="jumbotron">
        <div class="navbar">
            <div class="nav-menu">
                <div class="text">
                    <h2>MultiBlog</h2>
                </div>
            </div>
            <div class="profile">
                <div class="profil-box">
                    @if (Auth::user()->imgpp)
<img src="{{ asset('storage/' . Auth::user()->imgpp) }}" alt="" width="50"
                            class="rounded-circle">
                        @else
<img src="{{ asset('Assets/profile/⠀ 1.png')}}" alt="" width="50"
                            class="rounded-circle">
                        @endif
                    <div class="profil-text">{{ Auth::user()->username }}</div>
                </div>
            </div>
        </div>
        <div class="jmb-container" style='background-image: url("{{ asset('Assest/img/background.jpg') }}")'>
            <div class="input-profil">
                <input type="file" id="upload" hidden />
                <center> <label for="upload"><img src="{{ asset('Assest/assets/img/icon/Subtract.png') }}"
                            alt=""></label></center>
            </div>
        </div>

        <div class="back">
            <a href="{{ url('user/@' . Auth::user()->username) }}"><img
                    src="{{ asset('Assets/assets/img/icon/Back.png') }}" alt=""></a>
        </div>

        <form action="{{ url('user/@' . Auth::user()->name . '/editprofile') }}" method="post" enctype="multipart/form-data">
            @method('PATCH')
            @csrf
            <div class="container-content">
                <div class="profil-information">
                    <h3>Account Information</h3>

                    <div class="box-profil">
                        <input type="hidden" name="oldImage" value="{{ Auth::user()->imgpp }}">
                        <div class="picture" id="selectedBanner">
                            @if (Auth::user()->imgpp)
                                    <img src="{{ asset('storage/' . Auth::user()->imgpp) }}" alt=""
                                        width="50" class="rounded-circle img-preview">
                                @else
                                    <img src="{{ asset('Assets/profile/⠀ 1.png') }}" alt="" width="50"
                                        class="rounded-circle img-preview">
                                @endif
                        </div>

                        <div class="upload">
                            <label class="custom-file-upload">
                                <input type="file" class="form-control" id="image" placeholder="Enter password" name="imgpp" onchange="previewImage()">
                                Choose a file
                            </label>
                            <p>Accceptable formats: jpg, jpeg, png only<br>
                                Max file size is 1024kb
                            </p>
                        </div>
                    </div>


                    <div class="account-information">

                        <label for="name">Name</label>
                        @error('name')
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                            <br>
                        @enderror
                        <input type="text" value="{{ Auth::user()->name }}" id="name" name="name">

                        <label for="username">Username</label>
                        <input type="text" value="{{ Auth::user()->username }}" id="username" name="username">

                        <label for="email">Email</label>
                        <input type="text" value="{{ Auth::user()->email }}" id="email" name="email">

                        <label for="bio">Bio</label>
                        <textarea name="bio" id="bio" class="bio">{{ Auth::user()->bio }}</textarea>

                    </div>

                    <h3 class="change">Change Password</h3>
                    <div class="change-password">
                        <label for="curp">Current Password</label>
                        <input type="password" id="curp" name="curpass">

                        <label for="np">New Password</label>
                        <input type="password" id="np" name="newpass">

                        <label for="conp">Confirm Password</label>
                        <input type="password" id="conp" name="newpass_confirmation">
                        <div class="kosong"></div>
                        <div class="btn">
                            <button class="save" type="submit">Save</button>
                        </div>
                    </div>
                </div>
        </form>

        @include('layouts.footer')
        <!-- SCRIPT -->
        <script src="{{ asset('bootstrap-5/js/bootstrap.bundle.min.js') }}"></script>
        <script>
            function previewImage() {
                const image = document.querySelector('#image')
                const imgPreview = document.querySelector('.img-preview')

                imgPreview.style.display = 'block'


                const oFReader = new FileReader()
                oFReader.readAsDataURL(image.files[0])

                oFReader.onload = function(oFREvent){
                    imgPreview.src = oFREvent.target.result
                }
            }
        </script>

</body>

</html>

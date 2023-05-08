<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('Asset2/css/login/sginup.css') }}">
    <title>Sign - Up</title>
</head>

<body>
    <div class="container">
        <div class="content">
            <form action="{{ url('register') }}" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                {{-- {{ csrf_field() }} --}}
                {{-- @csrf --}}
                <a href="{{ url('home') }}"><img src="{{ asset('Asset2/img/left.png') }}" class="arrow"></a>
                <div class="title">
                    <h2>SignUp</h2>
                </div>
                <center>
                    <label class="btn-upload">
                        <input type="file" id="image" name="image" onchange="previewImage()">
                        <button class="btn btn-danger"><img
                                src="https://assets-a1.kompasiana.com/items/album/2021/03/24/blank-profile-picture-973460-1280-605aadc08ede4874e1153a12.png"
                                alt="" class="img-preview"></button>
                        @error('pictpro')
                            <br>
                            <span class="text-danger">{{ $errors->first('pictpro') }}</span>
                        @enderror
                    </label>
                </center>
                <label for="name">
                    @error('name')
                        <span class="text-danger">{{ $errors->first('name') }}</span>
                        <br>
                    @enderror
                    <input type="text" name="name" id="name" placeholder="Name">
                </label>
                <label for="username">
                    @error('username')
                        <span class="text-danger">{{ $errors->first('username') }}</span>
                        <br>
                    @enderror
                    <input type="text" name="username" id="username" placeholder="Username">
                </label>
                <label for="input-email">
                    @error('email')
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                        <br>
                    @enderror
                    <input type="email" id="input-email" name="email" placeholder="Email">
                </label>
                <label for="password">
                    @error('password')
                        <span class="text-danger">{{ $errors->first('password') }}</span>
                        <br>
                    @enderror
                    <input type="password" id="password" name="password" placeholder="Password">
                </label>
                <label for="password">
                    <input type="password" id="password" name="password_confirmation" placeholder="Confirm Password">
                </label>

                <label for="btn-submit" class="btn_submit">
                    <button class="sub" type="submit">SignUp</button>
                </label>
                <a href="{{ url('register/login') }}">Sudah Punya Akun?</a>
            </form>
        </div>
    </div>
    <script>
        function previewImage() {
            const image = document.querySelector('#image')
            const imgPreview = document.querySelector('.img-preview')

            imgPreview.style.display = 'block'


            const oFReader = new FileReader()
            oFReader.readAsDataURL(image.files[0])

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result
            }
        }
    </script>
</body>

</html>

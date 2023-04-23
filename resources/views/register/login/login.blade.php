<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('Assest/css/login/login.css') }}">
    <title>Login</title>
</head>

<body>
    <div class="container">
        <div class="content">
            <form action="{{ url('login') }}" method="POST">
                <a href="{{ url('home') }}"><img src="{{ asset('Assest/img/left.png')}}" class="arrow"></a>
                @csrf
                <div class="title">
                    <h2>Login</h2>
                </div>
                @if (session()->has('error_message'))
                    <div class="alert alert-danger">
                        {{ session()->get('error_message') }}
                    </div>
                @endif

                <label for="email">
                    @if ($errors->has('email'))
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                        <br>
                    @endif
                    <input type="email" id="email" name="email" placeholder="Email">
                </label>
                <label for="password">
                    @if ($errors->has('password'))
                        <span class="text-danger">{{ $errors->first('password') }}</span>
                        <br>
                    @endif
                    <input type="password" id="password" placeholder="Password" name="password">
                </label>

                <span class="text">
                    <input type="checkbox" name="check" id="check">
                    <label for="check">Remember me?</label>
                </span>

                <span class="textlog">
                    <label for="btn-submit" class="btn_submit">
                        <button class="sub" type="submit">Login</button>
                    </label>

                </span>
            </form>
            <label for="btn-submit" class="btn_submit">
                <a href="{{ url('register/signup') }}"><button class="sub">Sign Up</button></a>
            </label>
        </div>
    </div>

</body>

</html>


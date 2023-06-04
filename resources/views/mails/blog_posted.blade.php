<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        * {
            padding: 0;
            margin: 0;
        }

        .container {
            height: 100vh;
            background-repeat: no-repeat;
            background-position: center;
            background-image: linear-gradient(#001209, #275FB2);
        }

        .container .navbar {
            padding-left: 20px;
            padding-top: 10px;
            padding-bottom: 10px;
            background-color: #001331;
        }

        .container .navbar h2 {
            font-size: 30px;
            color: white;
            letter-spacing: 5px;
            word-spacing: 1px;
        }

        .container .jumbotron {
            padding: 0.5em;
            width: 100% !important;
            height: 10em !important;
            background-position: center !important;
            background-image: url("https://pbs.twimg.com/profile_banners/1267241076383010817/1632463716/1500x500") !important;
        }

        .container .content {
            margin-top: 1em;
            padding: 1.5em;
            background: linear-gradient(155.9deg, rgba(56, 105, 172, 0.3) 0%, rgba(15, 0, 60, 0) 100%);
        }

        .content-container {
            padding: 2em;
            background: rgba(39, 95, 178, 0.2);
        }

        .content .content-container span {
            display: block;
            color: white;
        }

        #name {
            font-size: 2.30em;
            letter-spacing: 1.5px;
            font-weight: 250;
        }

        #username {
            color: #707173;
            font-size: 15px;
            font-weight: 200;
        }

        #desk {
            margin-top: 0.80em;
        }

        #title {
            margin-top: 0.80em;
        }

        #date {
            margin-top: 0.80em;
        }

        #isi_kontent {
            margin-top: 0.80em;
        }

        @media screen and (max-width: 480px) {
            #name {
                font-size: 1.5em;
            }

            .footer-bottom p {
                font-weight: 200;
                font-size: 12px;
            }
        }

        .footer-bottom {
            margin-top: 5em;
            background: #001331;
            width: 100%;
            height: 20px;
            padding: 20px 0;
            text-align: center;
            color: white;
        }

        .footer-bottom p {
            font-weight: 200;
        }
    </style>
    <title>Home Guest</title>
</head>

<body>
    <div class="container">
        <div class="navbar">
            <h2>MultiBlog</h2>
        </div>
        <div class="jumbotron"></div>

        <div class="content">
            <div class="content-container">
                <span class="name" id="name">Hallo {{ Auth::user()->name }}</span>
                <span class="username" id="username">{{ '@' . Auth::user()->username }}</span>
                <span class="desk" id="desk">Kamu baru saja nge post nich, berikut deskripsinya</span>
                <span class="title" id="title">Judul: {{ $blog->title }}</span>
                <span class="date" id="date">Tanggal Upload: {{ $blog->created_at }}</span>
                <span class="isi_kontent" id="isi_kontent">
                    Isi Konten: {!! $blog['description'] !!}
                </span>
            </div>
        </div>
        <footer>
            <div class="footer-bottom">
                <p>© 2023 MULTITECH SOLUTION MAKASSAR</p>
            </div>
        </footer>
    </div>
</body>

</html>

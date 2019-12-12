<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        a{
            color: green;
            text-decoration:none
        }
        a:hover{
            text-decoration:none
        }
        .title{
            margin-left: 10px;
        }
        .signin-div{
            width: 180px;
            margin-bottom: 5px;
        }
        .signin-div a{
            padding:5px 10px;
        }
        .signin-div a img{
            height: 30px; 
            width: 30px;
        }
        .signin-div a span{
            margin-left: 20px;
        }
    </style>
</head>
<body>
    <div class="flex-center full-height">
        <div class="card" style="padding:60px; z-index: 1000">
            <h2 class="title">Sign in with</h2> 
            <div class="card signin-div">
                <a href="{{route('twitterLogin')}}">
                    <img src="{{asset('storage/img/twitter.png')}}">
                    <span>Twiiter</span>
                </a>
            </div>
            <div class="card signin-div">
                <a href="#">
                    <img src="{{asset('storage/img/facebook.png')}}">
                    <span>Facebook</span>
                </a>
            </div>
            <div class="card signin-div">
                <a href="#">
                    <img src="{{asset('storage/img/google.png')}}">
                    <span>Google</span>
                </a>
            </div>
            <div class="card signin-div">
                <a href="#">
                    <img src="{{asset('storage/img/instagram.jpg')}}">
                    <span>Instagram</span>
                </a>
            </div>
        </div>
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Signup</title>

    <link rel="canonical" href="https://getbootstrap.comhttps://getbootstrap.com/docs/5.0/examples/sign-in/">


    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/apple-touch-icon.png"
          sizes="180x180">
    <link rel="icon" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32"
          type="image/png">
    <link rel="icon" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16"
          type="image/png">
    <link rel="manifest" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/safari-pinned-tab.svg"
          color="#7952b3">
    <link rel="icon" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/favicon.ico">
    <meta name="theme-color" content="#7952b3">


    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/5.0/examples/sign-in/signin.css" rel="stylesheet">
</head>
<body class="text-center">

<main class="form-signin">
    <form action="{{url('register')}}" method="post">
        @csrf
        {{--        <img class="mb-4" src="https://getbootstrap.com/docs/5.0/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">--}}
        <h1 class="h3 mb-3 fw-normal">Please sign up</h1>

        <div class="input-group mt-3">
            <input name="name" type="text" class="form-control {{$errors->has('name') ? 'is-invalid':''}}"
                   value="{{old("name")}}" placeholder="Full name">
        </div>
        <div class="row">
            <div class="col-md-12">
                @if($errors->has('name'))
                    <div class="alert-danger w-100 m-0" role="alert">
                        {{$errors->first('name')}}
                    </div>
                @endif
            </div>
        </div>
        <div class="input-group mt-3">
            <input type="email" name="email" class="form-control {{$errors->has('email') ? 'is-invalid':''}}"
                   value="{{old("email")}}" placeholder="Email">
        </div>
        <div class="row">
            <div class="col-md-12">
                @if($errors->has('email'))
                    <div class="alert-danger w-100 m-0" role="alert">
                        {{$errors->first('email')}}
                    </div>
                @endif
            </div>
        </div>


        <div class="input-group mt-3">
            <input type="text" name="postcode" class="form-control {{$errors->has('postcode') ? 'is-invalid':''}}"
                   value="{{old("postcode")}}" placeholder="postcode">
        </div>
        <div class="row">
            <div class="col-md-12">
                @if($errors->has('postcode'))
                    <div class="alert-danger w-100 m-0" role="alert">
                        {{$errors->first('postcode')}}
                    </div>
                @endif
            </div>
        </div>

        <div class="input-group mt-3">
            <input type="password" name="password" class="form-control {{$errors->has('password') ? 'is-invalid':''}}"
                   placeholder="Password">
        </div>
        <div class="row">
            <div class="col-md-12">
                @if($errors->has('password'))
                    <div class="alert-danger w-100 m-0" role="alert">
                        {{$errors->first('password')}}
                    </div>
                @endif
            </div>
        </div>
        <div class="input-group mt-3">
            <input type="password" name="password_confirmation"
                   class="form-control {{$errors->has('password_confirmation') ? 'is-invalid':''}}"
                   placeholder="Retype password">
        </div>

        <div class="input-group mt-3">
            <button class="w-100 btn btn-lg btn-primary" type="submit">Sign up</button>
        </div>
        <p class="mt-5 mb-3 text-muted">&copy; iamproperty</p>
    </form>
</main>


</body>
</html>


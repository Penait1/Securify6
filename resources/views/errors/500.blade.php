<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Spot The Bug -- Securify</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ mix('css/stb_bundle.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>

<div class="container">

    <div class="row">
        <div class="col-md-12 border">

            <div class="jumbotron">
                <a href="#"><img class="img-responsive size center-block"
                                 src="https://media.giphy.com/media/bnN5dDIiuuJ4A/giphy.gif"></a> <br>
                <p class="text-center">Whoops, something went wrong.</p>
                <p><a class="btn btn-primary btn-lg center-block" href="/" role="button">Take me back to the
                        homepage</a></p>
            </div>

        </div>
    </div>
</div>

<footer class="site-footer" >
    <div class="container">
    <span>
        <a href="https://www.securify.nl/" target="_blank" id="footertext">Securify</a>

    </span>
    </div>
</footer>
</body>
</html>

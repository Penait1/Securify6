<!DOCTYPE html>
<html>
<head>
    <title>360F Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{ mix('css/stb_bundle.css') }}">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<body>
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Spot The bug </div>
                <div class="panel-body">
                    <p>
                      Welkom bij Spot The bug
                        <ul>
                        <li>
                            Wat is Spot The Bug
                        </li>
                        <li>
                            Hoe kan je meedoen
                        </li>
                        <li>
                            Authenticatie
                        </li>
                    </ul>
                    </p>
                </div>
            </div>
        </div>

        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login </div>
                <div class="panel-body">
                    <nav>
                        <ul>
                            <li>
                                <a href="{{ route('social.redirect', ['provider' => 'google'])}}"><i class="fa fa-google-plus fa-5x" aria-hidden="true"></i></a>
                            </li>
                            <li>
                                <a href="{{ route('social.redirect', ['provider' => 'github'])}}"><i class="fa fa-github fa-5x" aria-hidden="true"></i></a>
                            </li>
                            <li>
                                <a href="{{ route('social.redirect', ['provider' => 'Linkedin'])}}"><i class="fa fa-linkedin-square fa-5x" aria-hidden="true"></i></a>
                            </li>
                            <li>
                                <a href="{{ route('social.redirect', ['provider' => 'Facebook'])}}"><i class="fa fa-facebook-official fa-5x " aria-hidden="true"></i></a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>

</body>
</html>

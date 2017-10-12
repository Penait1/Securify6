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
                <div class="panel-heading">Login </div>
                <div class="panel-body">
                            <nav>
                                <ul>
                                    <li>
                                        <a href="{{ route('social.redirect', ['provider' => 'google'])}}">Login met je Google Account</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('social.redirect', ['provider' => 'github'])}}">Login met je Github Account</a>
                                    </li>

                                </ul>
                            </nav>

                </div>
            </div>
        </div>


</body>
</html>

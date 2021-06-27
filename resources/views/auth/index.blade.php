<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Golden Taste</title>

    <!-- Font Icon -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">


    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">

</head>

<body>
    <div class="main">
        <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container-sign">

                <div class="signin-content">
                    <div class="signin-image">
                        <figure class="figure-sign"><img src="img/sign/signin-image.jpg" alt="sing up image"></figure>

                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Sign In</h2>
                        <br>
                        <form method="POST" action="{{route('auth.login')}}">
                            @csrf
                            <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" class="form-control" id="id-sign" name="username"
                                    placeholder="username" />
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" class="form-control" id="id-sign" name="password"
                                    placeholder="password" />
                            </div>

                            <div class="form-group form-button">
                                <a href="/"></a>
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Log in" />
                            </div>
                        </form>
                        @if(session('fail'))

                        {{session('fail')}}
                        @endif
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>
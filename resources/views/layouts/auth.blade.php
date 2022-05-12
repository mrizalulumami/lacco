<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <!-- <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet"> -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker3.standalone.min.css">

    <title>LACCO : Login</title>
</head>

<body>
    @yield('content')
    <!-- <div class="d-md-flex half">
        <div class="bg order-1 order-md-2" style="background-image: url('/assets/images/logreg-cover.png');"></div>
        <div class="contents order-2 order-md-1">

            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-7">
                        <a href="/index.html">
                            <img class="mr-auto ml-2" src="/assets/images/lacco-logo.png" width="120px" alt="">
                        </a>
                        <h2 class="mt-5"><b>Welcome Back</b></h2>
                        <span style="color:#64748B;">Enter your username & password first.</span>
                        <form class="mt-5">
                            <div class="form-group">
                                <label for="exampleInputEmail1"><b>Username</b></label>
                                <input type="email" class="form-control" id="username" placeholder="Type your username">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1"><b>Password</b></label>
                                <input type="password" class="form-control" id="Password1" placeholder="******">
                            </div>
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <div class="d-flex">
                                    <label class="form-check-label" for="exampleCheck1">Remember me</label>
                                    <a class="ml-auto link-hell" href="#">forgot password?</a>
                                </div>
                            </div>
                        </form>
                        <a href="#">
                            <div class="button-hell text-center">
                                Sign in
                            </div>
                        </a>
                        <div class="d-flex mt-5">
                            <span>Don't have account?</span>
                            <a class="link-hell ml-1" href="register-2.html">Register here.</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div> -->

    <!-- Js & other assets -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="/js/jquery.slim.min.js"></script>
    <script src="/js/bootstrap.bundle.min.js"></script>
    <!-- <script src="{{ asset('/js/jquery.slim.min.js') }}"></script>
    <script src="{{ asset('/js/bootstrap.bundle.min.js')}}"></script> -->
    <script src="/js/bootstrap-datepicker.min.js"></script>
    <script src='bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js' type='text/javascript'></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"
        integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2"
        crossorigin="anonymous"></script>
    <!-- datepicker -->
    <script type="text/javascript">
        $(document).ready(function () {
            $('#datepicker').datepicker()
            "format"="dd-mm-yyyy"
        });
    </script>
</body>

</html>
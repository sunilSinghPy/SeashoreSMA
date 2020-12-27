
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>MERCHANT NAVY EXAM</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/checkout/">

    <!-- Bootstrap core CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">


    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <!-- Custom styles for this template -->
    <link href="css/form-validation.css" rel="stylesheet">
</head>

<body class="bg-light">
    <div class="container">
        <div class="py-5 text-center ">
            <a href="{{url('/form')}}"><img src="{{asset('img/logo.png')}}" alt="" class="h-20"></a>
            <h2>Merchant navy exam </h2>
            <hr>
            @isset($msg)
            <p class="lead text-white bg-success">{{$msg}}</p>
            @endisset

            <hr>
            <div class="row justify-content-center">
                <div class="col-md-8 ">
                    <div class="card text-white bg-dark">
                        <div class="card-header">
                            Your login info below:
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">USERNAME: {{$student->uname}}<br>PASSWORD: {{$student->upass}}</h5>
                            <p class="card-text">Click below button to login and start exam</p>

                            <a href="http://seashore.ga/site/userlogin?un={{$student->uname}}&pw={{$student->upass}}" class="btn btn-primary btn-lg">Login Here</a>
                        </div>
                    </div>
                </div>
            </div>

            <hr>

        </div>





        <footer class="my-5 pt-5 text-muted text-center text-small">
            <p class="mb-1">&copy; 2017-2020 seashore maritime academy</p>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="#">Privacy</a></li>
                <li class="list-inline-item"><a href="#">Terms</a></li>
                <li class="list-inline-item"><a href="#">Support</a></li>
            </ul>
        </footer>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="js/jquery.min.j.js"><\/script>')
    </script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/form-validation.js"></script>
</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('storage/assetsEric/login.css') }}">
    <!-- Bootstrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">




    </style>
    <title>LOGIN BOM</title>
</head>

<body>
    <div class="box rounded-5 border border-blue center">
        <form action="{{ route('authenticate') }}" method="post">
            @csrf

            <div class="row center ">
                <div class="d-flex col-lg-8">

                    <img src="{{ asset('storage/assetsEric/starrailASta.jpg') }}" class="img-fluid " alt="">
                </div>
                <div class="col-8 col-lg-4">

                    <div class="center login">
                        <h2 class="text-center text-white">LOGIN</h2>
                    </div>

                    @if(session()->has('loginError'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ session('loginError') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    <div class="input-box text-center" id="usernameBox">
                        <input type="text" name="nrp" id="nrp" required placeholder="Username">
                    </div>

                    <div class="input-box text-center" id="passwordBox">
                        <input type="password" name="password" id="password" placeholder="P45sw0rd" required>
                    </div>
                    <div class="col-12 text-center my-4 px-4 py-1">
                        <button type="submit" class="button border rounded-pill">Login</button>
                    </div>
                </div>

            </div>

    </div>
    </form>
    </div>
</body>

</html>
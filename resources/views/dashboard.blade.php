<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>

    <div class="container-fluid mb-5">
        <nav class="navbar bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('logo.png') }}" alt="" width="30" height="24"
                        class="d-inline-block align-text-top">
                    Bootstrap
                </a>
            </div>
        </nav>
    </div>

    <div class="container mb-3">
        <div class="alert alert-success" role="alert">
            Your Are Successfully Logged In. <br> Your Session ID is:  <span class="text-danger">{{ session('user_id') }}</span>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <a href="{{ route('logout') }}" class="btn btn-outline-danger w-50" >Logout</a>
            </div>
        </div>
    </div>

</body>

</html>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

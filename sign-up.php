
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>Signin</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <meta name="theme-color" content="#712cf9">

    <style>
        @media (min-width: 768px) {
            .form-signin{
                width: 500px;
            }
        }
    </style>

</head>

<body class="">
    <div class="container">
        <main class="form-signin m-auto card card-body mt-5">
            <form action="database/registration.php" method="POST">
                <h3 class="mb-1 text-center">PostBook</h3>
                <h5 class="mb-3 fw-normal text-center">Please Registration</h5> 

                <div class="form-floating mb-3">
                    <input type="text" name="name" class="form-control" id="floatingInput" placeholder="Enter Name">
                    <label for="floatingInput">Full Name</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="email" name="email" class="form-control" id="floatingInput" placeholder="Enter Email">
                    <label for="floatingInput">Email address</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" name="password" class="form-control" id="floatingInput" placeholder="password">
                    <label for="floatingInput">Password</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" name="password_confirmation" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Confirm Password</label>
                </div>

                <div class="checkbox mb-2">
                    <label>
                        <input type="checkbox" value="remember-me"> Remember me
                    </label>
                </div>
                <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
            </form>
        </main>

    </div>

</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">


    <title>login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="asset/css/login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
    <div id="main-wrapper" class="container">
        <div class="row justify-content-center">
            <div class="col-xl-10">
                <div class="card border-0">
                    <div class="card-body p-0">
                        <div class="row no-gutters">
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="mb-5">
                                        <h3 class="h4 font-weight-bold text-theme">Login</h3>
                                    </div>
                                    <h6 class="h5 mb-0">Welcome back!</h6>
                                    <p class="text-muted mt-2 mb-5">Enter your email address and password to access admin panel.</p>
                                    <form method="post" action="index.php">
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="exampleInputfirstname">First Name</label>
                                                    <input type="text" name="firstName" class="form-control" id="exampleInputfirstname">
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="exampleInputlastname">Last Name</label>
                                                    <input type="text" name="lastName" class="form-control" id="exampleInputlastname">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email address</label>
                                            <input type="email" name="email" class="form-control" id="exampleInputEmail1">
                                        </div>
                                        <div class="form-group mb-5">
                                            <label for="exampleInputPassword1">Password</label>
                                            <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                                        </div>

                                        <div class="form-group mb-5">
                                            <label for="exampleInputbirthday">Birthday</label>
                                            <input type="date" name="birthday" class="form-control" id="exampleInputbirthday">
                                        </div>
                                        <button type="submit" name="submit" value="signup" class="btn btn-theme">Signup</button>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-6 d-none d-lg-inline-block">
                                <div class="account-block rounded-right">
                                    <div class="overlay rounded-right"></div>
                                    <div class="account-testimonial">
                                        <h4 class="text-white mb-4">This beautiful theme yours!</h4>
                                        <p class="lead text-white">"Best investment i made for a long time. Can only recommend it for other users."</p>
                                        <p>- Admin User</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <p class="text-muted text-center mt-3 mb-0">Don't have an account? <a href class="text-primary ml-1">register</a></p>

            </div>

        </div>

    </div>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript">

    </script>
</body>

</html>
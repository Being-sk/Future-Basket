<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="asset/css/style.css" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Login</title>
</head>

<body>
    <div class="signInContainer">

        <div class="column">
            <div class="header">
                <h3>Sign In</h3>
                <span>to continue to Future Basket</span>
            </div>

            <div class="loginForm">
                <form action="signIn.php" method="POST">

                    <input type="text" name="userName" placeholder="Username" autocomplete="off" id="" required>
                    <input type="password" name="password" placeholder="Password" autocomplete="off" id="" required>
                    <input type="submit" class="submitButton" name="submitButton" value="SUBMIT">

                </form>
            </div>
            <a href="#" class="mr-5" data-target="#pwdModal" data-toggle="modal">Forgot my password</a><br>
            <a href="register.php" class="signInMessage mt-3">Need A New Account? Sign Up Here!</a>

        </div>
    </div>
    <div class="container">
    </div>

    <!--modal-->
    <div id="pwdModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="text-center">What's My Password?</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div class="text-center">

                                    <p>If you have forgotten your password you can reset it here.</p>
                                    <div class="panel-body">
                                        <fieldset>
                                            <div class="form-group">
                                                <input class="form-control input-lg" placeholder="E-mail Address" name="email" type="email">
                                            </div>
                                            <input class="btn btn-lg btn-primary btn-block" value="Send My Password" type="submit">
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="col-md-12">
                        <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>

</html>
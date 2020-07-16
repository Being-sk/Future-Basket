<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="asset/css/style.css" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Register</title>
</head>

<body>
    <div class="signInContainer">
        <div class="column">
            <div class="header">
                <h3>Sign up</h3>
                <span>to continue to Future Basket</span>
            </div>
            <div class="loginForm">
                <form action="signUp.php" method="POST">
                    <input type="text" name="firstName" placeholder="First Name" autocomplete="off" id="" required>
                    <input type="text" name="lastName" placeholder="Last Name" autocomplete="off" id="" required>
                    <input type="text" name="userName" placeholder="Username" autocomplete="off" id="" required>
                    <input type="email" name="email" placeholder="Email" autocomplete="off" id="" required>
                    <input type="email" name="email2" placeholder="Confirm Email" autocomplete="off" id="" required>
                    <input type="password" name="password" placeholder="Password" autocomplete="off" id="" required>
                    <input type="password" name="password2" placeholder="Confirm Password" autocomplete="off" id="" required>
                    <input type="submit" name="submitButton" value="SUBMIT">


                </form>
            </div>
            <a href="login.php" class="signInMessage">Already Have An Account?Sign In Here!</a>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>

</html>
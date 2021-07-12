<?php require_once "controllerUserData.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Form</title>
    <link rel="stylesheet" href="index1_style.css">
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="style.css">
</head>
<style>
.card-header {
    background-color: rgb(140, 221, 18);
    text-align: center;
    color: black;
}

.btn {
    background-color: rgb(140, 221, 18);
}

.extra a {
    color: grey;
    font-size: 13px;
    margin: 10px;
}
</style>
<body>
<nav>
        <ul>
            <li class="logo">Task Manager</li>
            <li class="items"><a href="#">Home</a></li>
            <li class="items"><a href="signup-user.php">Register</a></li>
            <!-- <li class="items"><a href="login.php">Login</a> -->
            <li class="items"><a href="logout.php">Logout</a>
            <li class="items"><a href="aboutus.php">About us</a></li>
            <li class="btn"><a href="#"><i class="fas fa-bars"></i></a></li>
        </ul>

    </nav>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form login-form">
                <form action="login-user.php" method="POST" autocomplete="">
                    <h2 class="text-center">Login Form</h2>
                    <p class="text-center">Login with your email and password.</p>
                    <?php
                    if(count($errors) > 0){
                        ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>
                    <div class="form-group">
                        <input class="form-control" type="email" name="email" placeholder="Email Address" required value="<?php echo $email ?>">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="password" placeholder="Password" required>
                    </div>
                    <div class="link forget-pass text-left"><a href="forgot-password.php">Forgot password?</a></div>
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="login" value="Login">
                    </div>
                    <div class="link login-link text-center">Not yet a member? <a href="signup-user.php">Signup now</a></div>
                </form>
            </div>
        </div>
    </div>
    <script>
    $(document).ready(function() {
        $('.btn').click(function() {
            $('.items').toggleClass("show");
            $('ul li').toggleClass("hide");
        });
    });
    </script>
</body>
</html>
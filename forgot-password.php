<?php require_once "controllerUserData.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="index1_style.css">
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<nav>
        <ul>
            <li class="logo">Task Manager</li>
            <li class="items"><a href="index.php">Home</a></li>
            <li class="items"><a href="signup-user.php">Register</a></li>
            <li class="items"><a href="login-user.php">Login</a>
            <li class="items"><a href="logout-user.php">Logout</a>
            <li class="items"><a href="aboutus.php">About us</a></li>
            <li class="btn"><a href="#"><i class="fas fa-bars"></i></a></li>
        </ul>

    </nav>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form">
                <form action="forgot-password.php" method="POST" autocomplete="">
                    <h2 class="text-center">Forgot Password</h2>
                    <p class="text-center">Enter your email address</p>
                    <?php
                        if(count($errors) > 0){
                            ?>
                            <div class="alert alert-danger text-center">
                                <?php 
                                    foreach($errors as $error){
                                        echo $error;
                                    }
                                ?>
                            </div>
                            <?php
                        }
                    ?>
                    <div class="form-group">
                        <input class="form-control" type="email" name="email" placeholder="Enter email address" required value="<?php echo $email ?>">
                    </div>
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="check-email" value="Continue">
                    </div>
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
<?php require_once "controllerUserData.php"; ?>
<?php 
$email = $_SESSION['email'];
$password = $_SESSION['password'];
if($email != false && $password != false){
    $sql = "SELECT * FROM usertable WHERE email = '$email'";
    $run_Sql = mysqli_query($con, $sql);
    if($run_Sql){
        $fetch_info = mysqli_fetch_assoc($run_Sql);
        $status = $fetch_info['status'];
        $code = $fetch_info['code'];
        if($status == "verified"){
            if($code != 0){
                header('Location: reset-code.php');
            }
        }else{
            header('Location: user-otp.php');
        }
    }
}else{
    header('Location: login-user.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?php echo $fetch_info['name'] ?> | Home</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="index1_style.css">
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<style>
.button {
    padding: 10px;
    margin-top: 15px;
    border-radius: 5px;
    font-weight: 500;
    font-family: Verdana, Geneva, Tahoma, sans-serif
}

.container3 {
    margin-top: 50px;
}
</style>

<body>
    <nav>
        <ul>
            <li class="logo">Task Manager</li>
            <li class="items"><a href="home.php">Home</a></li>
            <li class="items"><a href="signup-user.php">Register</a></li>
            <!-- <li class="items"><a href="login.php">Login</a> -->
            <li class="items"><a href="logout-user.php">Logout</a>
            <li class="items"><a href="aboutus.php">About us</a></li>
            <li class="btn"><a href="#"><i class="fas fa-bars"></i></a></li>
        </ul>

    </nav>
    </a>

    <div class="container mt-4">
        <h3>
            Welcome <?php echo $fetch_info['name'] ?>
        </h3>

        <div class="container my-4">
            <h2 id="heading" class="text-center">My Task </h2>

            <div class="mb-3">
                <label for="title" class="form-label">Day</label>
                <select name="days" class="form-control" id="title" aria-describedby="emailHelp">
                <option value="Sunday"></option>
                    <option value="Sunday">Sunday</option>
                    <option value="Monday">Monday</option>
                    <option value="Tuesday">Tuesday</option>
                    <option value="Wednesday">Wednesday</option>
                    <option value="Thursday">Thursday</option>
                    <option value="Friday">Friday</option>
                    <option value="Saturday">Saturday</option>
                </select>
                <div id="emailHelp" class="form-text"></div>
            </div>
            <div class="mb-3">
                <label for="title" class="form-label">Date</label>
                <input type="date" class="form-control" id="title1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text"></div>
            </div>
            <div class="mb-3">
                <label for="title" class="form-label">Time</label>
                <input type="time" class="form-control" id="title2" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text"></div>
            </div>
            <label for="title" class="form-label">Your Task</label>
            <div class="form-floating">
                <textarea class="form-control" placeholder="Add your Task" id="description"
                    style="height: 100px"></textarea>
                <label for="description"></label>
            </div>

            <button style="background-color: green;" type="submit" id="add" class="button">Add task</button>
            <button style="background-color: red;" id="clear" class="button" onclick="clearStorage()">clear
                list</button>
            <div class="container3">
                <div id="items my-4">
                    <h2>Your Task</h2>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#SNo</th>
                                <th scope="col">Day</th>
                                <th scope="col">Date</th>
                                <th scope="col">Time</th>
                                <th scope="col">Task</th>
                                <!-- <th scope="col">Title description</th> -->
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody id="tableBody">
                            <tr>
                                <th scope="row">1</th>
                                <td>Get some coffee</td>
                                <td>You need coffee as you are a coder</td>
                                <td>Get some coffee</td>
                                <td>Get some coffee</td>
                                <td><button class="btn btn-primary">Delete</button></td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
        </script>

        <script>
        function getAndupdate() {
            console.log("Updating list");
            tit = document.getElementById('title').value;
            tit1 = document.getElementById('title1').value;
            tit2 = document.getElementById('title2').value;
            desc = document.getElementById('description').value;
            if (localStorage.getItem('itemsJson') == null) {
                itemJsonArray = [];
                itemJsonArray.push([tit, tit1, tit2, desc]);
                localStorage.setItem('itemsJson', JSON.stringify(itemJsonArray));
            } else {
                itemJsonArrayStr = localStorage.getItem('itemsJson')
                itemJsonArray = JSON.parse(itemJsonArrayStr);
                itemJsonArray.push([tit, tit1, tit2, desc]);
                localStorage.setItem('itemsJson', JSON.stringify(itemJsonArray))
            }
            update();
        }

        function update() {
            if (localStorage.getItem('itemsJson') == null) {
                itemJsonArray = [];
                localStorage.setItem('itemsJson', JSON.stringify(itemJsonArray));
            } else {
                itemJsonArrayStr = localStorage.getItem('itemsJson')
                itemJsonArray = JSON.parse(itemJsonArrayStr);
            }

            //populate the table
            let tableBody = document.getElementById("tableBody");
            let str = "";
            itemJsonArray.forEach((element, index) => {
                str += ` 
               <tr>
                    <th scope="row">${index + 1}</th>
                    <td>${element[0]}</td>
                    <td>${element[1]}</td>
                    <td>${element[2]}</td>
                    <td>${element[3]}</td>
                    <td><button class="btn btn-primary" onclick="deleted(${index})">Delete</button></td>
                  </tr>
                  `
            });
            tableBody.innerHTML = str;
        }
        add = document.getElementById("add");
        add.addEventListener("click", getAndupdate);
        update();

        function deleted(itemIndex) {
            console.log("Delete", itemIndex);
            itemJsonArrayStr = localStorage.getItem('itemsJson')
            itemJsonArray = JSON.parse(itemJsonArrayStr);
            //Delete item index element from the array
            itemJsonArray.splice(itemIndex, 1);
            localStorage.setItem('itemsJson', JSON.stringify(itemJsonArray));
            update();
        }

        function clearStorage() {
            if (confirm("Do you really want to clear?")) {
                console.log("clearing the storage");
                localStorage.clear();
                update();
            }
        }
        </script>
        <!-- <script>
        function showNotification() {
            const notification = new Notification("New message from Todo's List", {
                body: "This is now your Study time"
            });
            notification.onclick = (e) => {
                window.location.href = "file:///C:/Users/sryad/Desktop/JS%20Tutorials/project2.html";
            }
        }
        //default, granted, denied 
        console.log(Notification.permission);

        if (Notification.permission === "granted") {
            // alert("we have permission");
            showNotification();

        } else if (Notification.permission !== "denied") {
            Notification.requestPermission().then(permission => {
                // if (permission === "granted") {
                //     showNotification();
                // }
                console.log(permission);
            });
        }
        </script> -->
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
<?php
require_once "dbconnection.php";
require_once "session.php";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];

    $qry = "SELECT * FROM `login` WHERE `email`='$email' AND `password`='$password'";
    $run = mysqli_query($dbcon, $qry);
    $row = mysqli_num_rows($run);
    if ($row < 1) {
?>
        <script>
            alert("Oops! Please enter your username and password again.");
            window.open('index.php', '_self');
        </script> <?php
                } else {
                    $data = mysqli_fetch_assoc($run);
                    $id = $data['u_id'];    //fetch id value of user
                    $email = $data['email'];
                    $_SESSION['uid'] = $id;   //now we can use it until session destroy
                    $_SESSION['emm'] = $email;
                    ?>
        <script>
            alert("Welcome User");
            window.open('home/home.php', '_self');
            // changes made here
        </script> <?php

                }
            }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <style>
        body {
            background-repeat: no-repeat;
            background-size: cover;
            font-family: 'Arial', sans-serif;
            color: #273c75;
            margin: 0;
            padding: 0;
            height: 100%;
        }

        h1 {
            text-align: center;
            margin: 15px;
            color: seagreen;
            font-weight: bold;
            font-family: 'Times New Roman', Times, serif;
        }

        p {
            text-align: center;
            font-weight: bold;
            color: orange;
            font-family: 'Times New Roman', Times, serif;
        }

        .container {
            margin-top: 60px;
            width: 50%;
            background-color: rgba(255, 255, 255, 0.8);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
        }

        .btn-primary {
            background-color: #273c75;
            border-color: #273c75;
        }

        .btn-primary:hover {
            background-color: #1e2b5f;
            border-color: #1e2b5f;
        }

        .btn-primary:focus {
            box-shadow: none;
        }

        a {
            color: #e84118;
        }

        a:hover {
            color: #c23616;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <h1>SHIPSMART COURIER SERVICE</h1>
    <hr>
    <p>The Fastest Courier Service Ever</p>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Login</h2>
                <p>Please Fill Your Details</p>
                <form action="" method="post">
                    <div class="form-group">
                        <label>Email Address</label>
                        <input type="email" name="email" class="form-control" placeholder="Enter username/emailId" required>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Enter your password" required>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit" class="btn btn-primary" value="SignIn">
                    </div>
                    <p>Don't have an account? <a href="register.php">Register here</a>.</p>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

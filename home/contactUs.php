<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- Somehow I got an error, so I comment the title, just uncomment to show -->
    <title>ContactUs</title>
    <link rel="stylesheet" href="../css/style.css">
    <!-- bootstrap cdn link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
    body {
        background-repeat: no-repeat;
        background-size: cover;
        font-family: Arial, sans-serif;
    }

.container {
        width: 100%;
        margin: 2rem auto;
        padding: 2rem;
        background-color: rgba(255, 255, 255, 0.8);
        border-radius: 10px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    }

    form {
        margin-top: 2rem;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    th, td {
        padding: 0.5rem 1rem;
        border: 1px solid #ccc;
        text-align: left;
    }

    th {
        background-color: #f2f2f2;
        font-weight: bold;
    }

    tr:hover {
        background-color: #f5f5f5;
    }

    input[type="text"], input[type="number"], input[type="email"], input[type="date"] {
        width: 100%;
        padding: 0.5rem;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.1);
    }

    input[type="text"]:focus, input[type="number"]:focus, input[type="email"]:focus, input[type="date"]:focus {
        border-color: #4CAF50;
        box-shadow: 0 0 4px 0 #4CAF50;
    }

    input[type="submit"] {
        background-color: #4CAF50;
        color: white;
        padding: 0.5rem 1rem;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        margin-top: 1rem;
        box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.2);
    }

    input[type="submit"]:hover {
        background-color: #45a049;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    }

    label {
        display: block;
        font-weight: bold;
        margin-bottom: 0.5rem;
        color: #333;
    }

    button, input[type="submit"] {
        background-color: #4CAF50;
        color: white;
        padding: 0.5rem 1rem;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        margin-top: 1rem;
        box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.2);
    }

    button:hover, input[type="submit"]:hover {
        background-color: #45a049;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    }

    h2 {
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        padding: 0.5rem;
        margin: 1rem 0;
    }

    h4 {
text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2);
        padding: 0.5rem;
        margin: 1rem 0;
    }
</style>
</head>

<body>
<?php
include('header.php');
?>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 mail-form">
                <h2 class="text-center">Drop a message</h2>
                <p class="text-center">We are waiting for your response..</p>
                
                <form action="contactUs.php" method="POST">
                    <div class="form-group">
                        <input class="form-control" name="email" type="email" placeholder="email Id" >
                    </div>
                    <div class="form-group">
                        <input class="form-control" name="subject" type="text" placeholder="Subject">
                    </div>
                    <div class="form-group">
                        <!-- change this tag name into textarea to show textarea field. Due to more textarea I got an error, so I change the name of this field -->
                        <input  class="form-control textarea" type="textarea" name="message" placeholder="Compose your message..">
                    </div>
                    <div class="form-group">
                        <input class="form-control button btn-primary" type="submit" name="send" value="Send" placeholder="Subject">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
<!-- starting php code -->
<?php

if (isset($_POST['send'])) {
    include('../dbconnection.php');
    //access user entered data
    $eml = $_POST['email'];
    $sub = $_POST['subject'];
    $msg = $_POST['message'];

    $qry = "INSERT INTO `contacts` (`email`, `subject`, `msg`) VALUES ('$eml', '$sub', '$msg')";
    $run = mysqli_query($dbcon, $qry);

    if ($run == true) {

    ?> <script>
            alert('Thanks, we will be looking at your concern :)');
            window.open('home.php', '_self');
        </script>
    <?php
    }
}
?>
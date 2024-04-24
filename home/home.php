<?php

session_start();
if(isset($_SESSION['uid'])){
    echo "";
    }else{
    header('location: ../index.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <style>
    body {
        background-image: url('../images/bck.jpg');
        background-repeat: no-repeat;
        background-size: cover;
        font-family: Arial, sans-serif;
    }

.container {
        width: 80%;
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
    <?php include('header.php'); ?>
    <div align='center' style="font-weight: bold;font-family:'Times New Roman', Times, serif"><br><br><br><br>
        <h2>This is a SHIPSMART Courier Management Service</h2>
        <h4>The fastest courier service of India</h4><br><br>
        <h3>ADBMS PROJECT</h3>
    </div>
</body>
</html>
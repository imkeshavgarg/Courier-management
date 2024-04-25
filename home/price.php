<?php
session_start();
if(isset($_SESSION['uid'])){
    echo "";
    }else{
    header('location: ../index.php');
    }

?>
<?php
include('header.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pricing</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 20px;
        }

        table {
            width: 50%;
            margin: 40px auto;
            border-collapse: collapse;
            border: 2px solid #28a745;
            border-radius: 10px;
            overflow: hidden;
        }

        th {
            background-color: #28a745;
            color: white;
            font-size: 10px;
            padding: 10px;
        }

        td {
            text-align: center;
            padding: 9px;
            border-bottom: 1px solid #dee2e6;
            font-size: 13px;
        }

        ol {
            margin: 0 auto;
            padding: 20px;
            max-width: 300px;
            list-style: inside;
        }

        li {
            font-size: 18px;
            margin-bottom: 8px;
            color: #495057;
        }

        h3 {
            text-align: center;
            font-size: 18px;
            color: #343a40;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <table width='30%' border="5px solid" style="margin-top:30px;margin-left:auto ;margin-right:auto ;font-weight:bold;border-spacing: 5px 5px;border-collapse: collapse;">
    <tr style="background-color: green;font-size:30px">
    <th>Weight in Kg</th><th>Price</th>
    </tr>
    <tr>
    <td>0-1</td><td>120</td>
    </tr>
    <tr>
    <td>1-2</td><td>200</td>
    </tr>
    <tr>
    <td>2-4</td><td>250</td>
    </tr>
    <tr>
    <td>4-5</td><td>300</td>
    </tr>
    <tr>
    <td>5-7</td><td>400</td>
    </tr>
    <tr>
    <td>7-above</td><td>500</td>
    </tr>
    </table>
    <h3 align="center" style="margin-top:20px;"> As per your courier's weight pay the amount on:</h3>
    <div style="margin-left:45% ;margin-right:auto ;font-weight:bold;">
    <ol>
    <li>UPI: abcd@sbi.com</li>
    <li>GPay: 1234567890</li>
    <li>PhnPay:8523697412</li>
    </ol>
    </div>
</body>
</html>
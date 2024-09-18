<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Details</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
            background: linear-gradient(to bottom, #fff, #f0f0f0);
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            position: relative;
        }
        th, td {
            padding: 15px;
            border: none;
            text-align: left;
            font-size: 16px;
            color: #333;
        }
        th {
            background-color: #4CAF50;
            color: #fff;
            text-transform: uppercase;
            border-radius: 10px 10px 0 0;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        tr:hover {
            background-color: #f2f2f2;
        }
        .total-row td {
            font-weight: bold;
        }
        h1 {
            text-align: center;
            margin-top: 40px;
            color: #555;
        }
        .upper-curve, .lower-curve {
            position: absolute;
            left: 0;
            width: 100%;
            height: 20px;
            background: linear-gradient(to bottom right, transparent 49%, #f0f0f0 50%);
            z-index: 1;
            border-radius: 0 0 10px 10px;
        }
        .lower-curve {
            top: calc(100% - 20px);
            background: linear-gradient(to top right, transparent 49%, #f0f0f0 50%);
        }
        nav {
            position: absolute;
            top: 20px;
            left: 20px; /* Adjusted to move the nav to the left */
            display: flex;
            align-items: center;
        }
        
        nav .logo {
            width: 100px; 
            height: auto; 
            margin-right: 5px; /* Adjusted margin to separate logo from links */
            margin-bottom: auto; /* Added margin to push the logo a bit downwards */
            margin-top:auto;
        }

        nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
            margin-bottom:80px;
        }
        nav ul li {
            margin-right: 15px; 
        }

        nav ul li a {
            text-decoration: none;
            color: black;
        }
        .hero {
            background-color: #8FBC8F;
            padding: 10px 20px; /* Added padding */
            border: none; /* Removed default button border */
            border-radius: 5px; /* Added border radius */
            cursor: pointer; /* Changed cursor to pointer */
            transition: background-color 0.3s ease; /* Added transition effect */
        }

        .hero:hover {
            background-color: #5f9f5f; /* Changed background color on hover */
        }

    </style>
</head>
<body>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<nav>
    <button class="hero"><a href="graph.php">View Graph</a></button>
    <ul>
        <li><a href="home.php"> Back to Home   <i class="material-icons">home</i></a></li>
    </ul>
</nav>
    </br>

<h1>Customer Details</h1>

<?php  
$connect = mysqli_connect('localhost', 'root', '', 'addcustomer');
if (mysqli_connect_error()) {
    echo 'Failed to connect: ' . mysqli_connect_error();
} else {
    $sql = 'SELECT * FROM customer_details ORDER BY DateTime';  
    $retval = mysqli_query($connect, $sql);  

    if ($retval && mysqli_num_rows($retval) > 0) {  
        echo '<table>';
        echo '<tr><th>Name</th><th>Phone</th><th>Credit balance</th><th>Address</th><th>Bill Number</th><th>Date and Time</th></tr>';
        $totalCredit = 0; // Variable to hold total credit balance
        while ($row = mysqli_fetch_assoc($retval)) {  
            echo "<tr>
                      <td>{$row['name']}</td>
                      <td>{$row['phone']}</td>
                      <td>{$row['credit']}</td>
                      <td>{$row['address']}</td>
                      <td>{$row['bill']}</td>
                      <td>{$row['DateTime']}</td>
                  </tr>";  
            // Adding current credit balance to total
            $totalCredit += (float)$row['credit'];
        }
        echo '<tr class="total-row"><td colspan="2">Total Credit Balance</td><td colspan="4">' . $totalCredit . '</td></tr>';
        echo '</table>';
        echo '<div class="upper-curve"></div>'; // Adding upper curve
        echo '<div class="lower-curve"></div>'; // Adding lower curve
    } else {  
        echo "0 results or an error occurred: " . mysqli_error($connect);
    }  
    
    mysqli_close($connect);  
} 

?> 

</body>
</html>

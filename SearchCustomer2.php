<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Customer</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }
        .container {
            padding-top: 20px;
        }
        .card {
            border-radius: 15px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .card-header {
            background-color: #4CAF50;
            color: #fff;
            border-radius: 15px 15px 0 0;
            font-weight: bold;
        }
        .form-control {
            border-radius: 5px;
        }
        .btn-primary {
            border-radius: 5px;
            background-color: transparent;
            border-color: transparent;
            color: #007bff; /* Default Bootstrap primary color */
        }
        .btn-primary:hover {
            background-color: transparent;
            border-color: transparent;
            color: #0056b3; /* Change color on hover if desired */
        }
        .input-group-text {
            background-color: transparent;
            border-color: transparent;
            color: #007bff; /* Default Bootstrap primary color */
        }
        .input-group-text:hover {
            background-color: transparent;
            border-color: transparent;
            color: #0056b3; /* Change color on hover if desired */
        }
        .table {
            background-color: #fff;
            border-radius: 15px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            overflow: hidden; /* Hide overflow for rounded corners */
        }
        .table th, .table td {
            vertical-align: middle;
            font-size: 0.9rem; /* Adjust font size */
            padding: 12px; /* Adjust padding */
            text-align: center; /* Center align text */
        }
        .table th {
            background-color: #4CAF50;
            color: #fff;
            font-weight: bold;
            text-transform: uppercase;
        }
        .table tbody tr:nth-child(odd) {
            background-color: #f9f9f9;
        }
        .table tbody tr:hover {
            background-color: #e0e0e0;
        }
        .no-record {
            text-align: center;
            font-weight: bold;
            color: #555;
        }
        nav {
            position: absolute;
            top: 20px;
            right: 20px;
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
        .hero{
            background-color:#8FBC8F;
        }
    </style>
</head>
<body>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<nav>
       
        <ul>
          <button class="hero"> 
            <li><a href="home.php"> Back to Home   <i class="material-icons">home</i></a></li>
    </button>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-md-7 mx-auto">
                <div class="card">
                    <div class="card-header text-center">
                        Search Customer
                    </div>
                    <div class="card-body">
                        <form action="" method="GET">
                            <div class="input-group mb-3">
                                <input type="text" name="search" required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" class="form-control" placeholder="Search Customer">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fas fa-search"></i> Search
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <?php 
        if(isset($_GET['search']) && !empty($_GET['search'])) { // Check if search query is submitted and not empty
            $con = mysqli_connect("localhost","root","","addcustomer");
            $filtervalues = $_GET['search'];
            $query = "SELECT * FROM customer_details WHERE CONCAT(name,address,phone,credit,bill,DateTime) LIKE '%$filtervalues%' ";
            $query_run = mysqli_query($con, $query);
            if(mysqli_num_rows($query_run) > 0) { ?>
                <div class="row mt-4">
                    <div class="col-md-10 mx-auto">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Address</th>
                                                <th>Phone</th>
                                                <th>Credit</th>
                                                <th>Bill</th>
                                                <th>Date and Time</th>
                                                <th>Paid Credit</th> <!-- Added table header -->
                                                <th>Add Credit</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($query_run as $items) { ?>
                                                <tr>
                                                    <td><?= $items['name']; ?></td>
                                                    <td><?= $items['address']; ?></td>
                                                    <td><?= $items['phone']; ?></td>
                                                    <td><?= $items['credit']; ?></td>
                                                    <td><?= $items['bill']; ?></td>
                                                    <td><?= $items['DateTime']; ?></td>
                                                    <td>
                                                        <form action="update_credit.php" method="POST">
                                                            <input type="hidden" name="phone" value="<?= $items['phone']; ?>">
                                                            <input type="number" name="new_credit" class="form-control" placeholder="Amount">
                                                            <button type="submit" class="btn btn-primary mt-2">Paid</button>
                                                        </form>
                                                    </td>
                                                    <td>
                                                        <form action="update_credit2.php" method="POST">
                                                            <input type="hidden" name="phone" value="<?= $items['phone']; ?>">
                                                            <input type="number" name="new_credit" class="form-control" placeholder="Amount">
                                                            <button type="submit" class="btn btn-primary mt-2">ADD CREDIT</button>
                                                        </form>
                                                    </td>
                                                    

                                                     <!-- Added table cell with form -->
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } else { ?>
                <div class="row mt-4">
                    <div class="col-md-10 mx-auto">
                        <div class="card">
                            <div class="card-body">
                                <p class="no-record">No Record Found</p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php }
        } ?>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Font Awesome JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
</body>
</html>

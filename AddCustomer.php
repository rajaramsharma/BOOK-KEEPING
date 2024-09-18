<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration Form</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f5f5f5; /* Light gray background */
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            background-color: #fff;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            background-image: linear-gradient(45deg, #5e92f3, #36d1dc); /* Gradient background */
            width: 400px;
            text-align: center;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #333;
            font-size: 14px;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 14px;
        }

        button {
            background-color: #4caf50; /* Green button */
            color: #fff;
            padding: 12px 24px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: green; /* Darker green on hover */
        }

        small {
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

<form action="process_customer.php" method="post">
        
        <label for="name">Customer Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="address">Customer Address:</label>
        <input type="text" id="address" name="address" required>

        <label for="phone">Phone Number:</label>
        <input type="text" id="phone" name="phone" pattern="[89][0-9]{9}" title="Please enter a 10-digit number starting with 8 or 9" required>

        <label for="credit">Credit Balance:</label>
        <input type="number" id="credit" name="credit" min="0" required>
        
        <label for="billNumber">Bill Number:</label>
        <input type="number" id="bill" name="bill" required>

        <button type="submit" value="AddCustomer">Add Customer</button>
    </form>

</body>
</html>

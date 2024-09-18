<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Keeping</title>
    <link rel="stylesheet" href="stylesforhome.css">
    <style>
        /* Additional styles for the animation */
        .welcome-message h1, .welcome-message h2 {
            display: inline-block;
            opacity: 0;
            transform: translateY(20px);
            animation: fadeInUp 0.5s ease-in-out forwards;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
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
            color: white;
        }
    </style>
</head>

<body>
    <nav>
        <img src="logo.png" alt="Logo" class="logo">
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="About.html">About</a></li>
            <li><a href="AddCustomer.php">Add Customer</a></li>
            <li><a href="SearchCustomer.php"> Customer Details</a></li>
            <li><a href="SearchCustomer2.php"> Search Customer</a></li>
            <li><a href="login.php" onclick="logout()">Logout</a></li> 
        </ul>
    </nav>

    <div class="hero">
        <div class="welcome-message animated">
            <h1>WELCOME TO</h1>
            <h2>BOOK KEEPING WEB APPLICATION</h2>
        </div>
    </div>

    <script src="script.js"></script>

    <script>
        function logout() {
            window.location.href = "logout.html";
        }
    </script>
</body>

</html>

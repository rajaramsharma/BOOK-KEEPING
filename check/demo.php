
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
    </style>
</head>

<body>
    <div class="hero">
        <nav>
            <img src="raja.png" alt="Logo" class="logo">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="About.html">About</a></li>
                <li><a href="AddCustomer.html">Add Customer</a></li>
                <li><a href="SearchCustomer.html">Search Customer</a></li>
                <li><a href="#" onclick="logout()">Logout</a></li> <!-- Add this line for the logout button -->
            </ul>
        </nav>

        <div class="welcome-message animated">
            <h1>WELCOME TO</h1>
            <h2>BOOK KEEPING WEB APPLICATION</h2>
        </div>
    </div>

    <script src="script.js"></script>

    <script>
        function logout() {
            // Add your logout logic here
            // For example, redirect the user to the logout page
            window.location.href = "logout.html";
        }
    </script>
</body>

</html>

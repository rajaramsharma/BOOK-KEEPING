<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CREDIT GRAPH</title>
    <style>
        /* Your CSS styles here */
    </style>
</head>
<body>
<nav>
    <!-- Your navigation links here -->
</nav>

<h1>CREDIT GRAPH</h1>

<?php  
// Your PHP code to retrieve data from the database
$connect = mysqli_connect('localhost', 'root', '', 'addcustomer');
if (mysqli_connect_error()) {
    echo 'Failed to connect: ' . mysqli_connect_error();
} else {
    $sql = 'SELECT * FROM customer_details ORDER BY DateTime';  
    $retval = mysqli_query($connect, $sql);  

    if ($retval && mysqli_num_rows($retval) > 0) {
        // Initialize an array to store monthly credit data
        $monthlyCreditData = array_fill(1, 12, 0); // Initialize all months with 0 credit

        while ($row = mysqli_fetch_assoc($retval)) {
            // Extract month from DateTime field
            $month = date('n', strtotime($row['DateTime']));
            // Add credit to the corresponding month
            $monthlyCreditData[$month] += (float)$row['credit'];
        }

        // Convert the monthly credit data to JSON format for JavaScript
        $monthlyCreditDataJSON = json_encode(array_values($monthlyCreditData));
    }
    
    mysqli_close($connect);  
} 
?>

<!-- Display the graph -->
<div style="width: 80%; margin: 0 auto;">
    <canvas id="monthlyCreditChart"></canvas>
</div>

<!-- Include Chart.js library -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    // Parse the PHP-generated JSON data for monthly credit
    var monthlyCreditData = <?php echo $monthlyCreditDataJSON; ?>;
    
    // Create a new Chart.js instance
    var ctx = document.getElementById('monthlyCreditChart').getContext('2d');
    var monthlyCreditChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
            datasets: [{
                label: 'Monthly Credit',
                data: monthlyCreditData,
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
</script>

</body>
</html>
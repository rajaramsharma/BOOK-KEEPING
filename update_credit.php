<?php
// Check if form data is submitted and not empty
if(isset($_POST['phone'], $_POST['new_credit']) && !empty($_POST['phone']) && !empty($_POST['new_credit'])) {
    // Retrieve form data and sanitize
    $phone = $_POST['phone'];
    $new_credit = $_POST['new_credit'];
    
    // Connect to the database
    $connect = mysqli_connect('localhost', 'root', '', 'addcustomer');
    
    // Check if connection is successful
    if (!$connect) {
        die("Connection failed: " . mysqli_connect_error());
    }
    
    // Escape special characters to prevent SQL injection
    $phone = mysqli_real_escape_string($connect, $phone);
    $new_credit = mysqli_real_escape_string($connect, $new_credit);
    
    // Retrieve the original credit value from the database
    $query = "SELECT credit FROM customer_details WHERE phone = '$phone'";
    $result = mysqli_query($connect, $query);
    
    if(mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $original_credit = $row['credit'];
        
        // Subtract the given data from the original credit value
        $updated_credit = $original_credit - $new_credit;
        
        // Update credit in the database based on phone number
        $update_result = mysqli_query($connect, "UPDATE customer_details SET credit = '$updated_credit' WHERE phone = '$phone'");
        
        if($update_result) {
            // Credit updated successfully
            echo '<script>
                var confirmation = window.confirm("Credit PAID successfully for phone number: ' . $phone . '. Click OK to go back to SearchCustomer2.php.");
                if (confirmation) {
                    window.location.href = "SearchCustomer2.php";
                }
            </script>';
        } else {
            // Error updating credit
            echo "Error updating credit for phone number: " . $phone;
        }
    } else {
        // Phone number not found in the database
        echo "Phone number not found in the database.";
    }
} else {
    // Form data not submitted or empty
    echo "Form data not submitted or empty.";
}
?>

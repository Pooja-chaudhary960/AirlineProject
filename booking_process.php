<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve user inputs
    $origin = $_POST['origin'];
    $destination = $_POST['destination'];
    $flight_date = $_POST['flight_date'];

    // Validate inputs (You can add more validation as per your requirements)

    // Redirect to outbound details page with parameters
    header("Location: finalize_booking.php?origin=$origin&destination=$destination&flight_date=$flight_date");
    exit();
} else {
    // Handle invalid request
    echo "Invalid request.";
}
?>

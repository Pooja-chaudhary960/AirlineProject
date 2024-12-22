<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['flight_number'])) {
    $flight_number = $_GET['flight_number'];

    // Fetch the flight details
    $stmt = $con->prepare("SELECT * FROM bookflight WHERE flight_number = ?");
    $stmt->bind_param("s", $flight_number);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $flight = $result->fetch_assoc();
        // Display flight details and booking form (omitted for brevity)
        // Process booking (omitted for brevity)
    } else {
        echo "Flight not found.";
    }

    $stmt->close();
}

$con->close();
?>

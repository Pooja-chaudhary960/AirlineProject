<?php
include 'db.php';

$origin = $_GET['origin'];
$destination = $_GET['destination'];
$flight_date = $_GET['flight_date'];

$sql = "SELECT * FROM bookflight WHERE origin = '$origin' AND destination = '$destination' AND flight_date = '$flight_date'";
$result = $con->query($sql);

if (!$result) {
    // Query execution failed
    die('Error in query: ' . $con->error);
}

if ($result->num_rows > 0) {
    // Display outbound flights
    echo "<table border='1'>";
    echo "<tr><th>Flight Number</th><th>Origin</th><th>Destination</th><th>Class</th><th>Duration</th><th>Price</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['flight_number'] . "</td>";
        echo "<td>" . $row['origin'] . "</td>";
        echo "<td>" . $row['destination'] . "</td>";
        echo "<td>" . $row['class'] . "</td>";
        echo "<td>" . $row['duration'] . "</td>";
        echo "<td>" . $row['price'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No flights found for the selected criteria.";
}

$con->close();
?>

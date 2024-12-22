
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Airline Dashboard</title>
    <link rel="stylesheet" href="bookF.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <div class="container">
        <nav>
            <ul>
				<li><a href="HomeU.php"><i class='bx bx-home'></i> Home</a></li>&nbsp;
                <li><a href="SearchFlight.php"><i class='bx bx-search'></i> Search Flight</a></li>&nbsp;
                <li><a href="FlightStatus.php"><i class='bx bx-plane-arrival'></i> Flight Status</a></li>&nbsp;
                <li><a href="Route.php"><i class='bx bx-map'></i> Route</a></li>&nbsp;
                <li><a href="Booking.html"><i class='bx bx-bookmark'></i> Book Flight</a></li>&nbsp;
                <li><a href="logout.php"><i class='bx bx-log-out'></i> Logout</a></li>&nbsp;
            </ul>
        </nav>

        
    </div>
	 <div class="container">
        <h2>Routes</h2>
        <p>Here you can view all available routes.</p>
        <!-- Add PHP code to fetch and display routes data from the database -->
		<?php
include 'db.php';

// Query to fetch flight routes for Nepal airports
$sql = "SELECT origin, destination, departure_time, arrival_time, price 
        FROM flight";

$result = $con->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    echo "<table>";
    echo "<tr><th>Origin</th><th>Destination</th><th>Departure Time</th><th>Arrival Time</th><th>Price</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["origin"]. "</td><td>" . $row["destination"]. "</td><td>" . $row["departure_time"]. "</td><td>" . $row["arrival_time"]. "</td><td>" . $row["price"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$con->close();
?>

    </div>
</body>
</html>
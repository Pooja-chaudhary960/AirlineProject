<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flight Status</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <nav>
            <ul>
                <li><a href="HomeU.php">Home</a></li>
                <li><a href="SearchFlight.php">Search Flight</a></li>
                <li><a href="FlightStatus.php">Flight Status</a></li>
                <li><a href="Route.php">Route</a></li>
                <li><a href="BookFlight.php">Book Flight</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
        
        <div class="content">
            <h2>Flight Status</h2>
            <p>Check the real-time status of your flight.</p>

            <form method="POST" action="flight_status.php">
                <div class="search-filter">
                    <input type="text" name="origin" placeholder="Enter Origin Airport" required>
                    <input type="text" name="destination" placeholder="Enter Destination Airport" required>
                    <button type="submit">Submit</button>
                </div>
            </form>
<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $origin = $_POST['origin'];
    $destination = $_POST['destination'];

    // Query to fetch flight status
    $sql = "SELECT flight_number, origin, destination, departure_time, arrival_time, flight_time, revised_time, flight_status, flight_remarks 
            FROM flights 
            WHERE origin='$origin' AND destination='$destination'";

    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        echo "<table>
                <tr>
                    <th>Flight No.</th>
                    <th>Departure</th>
                    <th>Arrival</th>
                    <th>Flight Time</th>
                    <th>Revised Time</th>
                    <th>Flight Status</th>
                    <th>Flight Remarks</th>
                </tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>{$row['flight_number']}</td>
                    <td>{$row['origin']}</td>
                    <td>{$row['destination']}</td>
                    <td>{$row['flight_time']}</td>
                    <td>{$row['revised_time']}</td>
                    <td>{$row['flight_status']}</td
                  </tr>";
        }
        echo "</table>";
    } else {
        echo "No results found";
    }

    $con->close();
}
?>
      
    </div>
</body>
</html>

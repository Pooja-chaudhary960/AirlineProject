<!DOCTYPE html>
<html>
<head>
    <title>Book a Flight</title>
	 <link rel="stylesheet" type="text/css" href="styleB.css">
</head>
<body>
    <h1>Book a Flight</h1>
    <form action="booking_process.php" method="post">
        <label for="origin">Origin:</label>
        <input type="text" id="origin" name="origin" required><br><br>

        <label for="destination">Destination:</label>
        <input type="text" id="destination" name="destination" required><br><br>

        <label for="flight_date">Flight Date:</label>
        <input type="date" id="flight_date" name="flight_date" required><br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>

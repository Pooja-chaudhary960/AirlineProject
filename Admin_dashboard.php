<?php
session_start();
// Add your dashboard code here
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Airline Dashboard</title>
    <link rel="stylesheet" href="dash.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <div class="container">
        <nav>
            <ul>
                <li><a href="homeadmin.php"><i class="fas fa-home"></i> Home</a></li>
                <li><a href="manage.php"><i class="fas fa-route"></i> Manage flight</a></li>
                <li><a href="managebook.php"><i class="fas fa-ticket-alt"></i>Manage booking</a></li>
                <li><a href="logoutadmin.php"><i class="fas fa-sign-out-alt"></i> Logoff</a></li>
            </ul>
        </nav>

        
    </div>
</body>
</html>
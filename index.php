<?php
include('database.php');
// include('appointment.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wellness Web Hub</title>
    <link rel="stylesheet" href="style.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lobster&family=Pacifico&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>
</head>
<body>
    <div id="heading"><i class="fa-solid fa-heart-pulse"></i><strong>Wellness Web Hub</strong></div>
    <div class="main">
    <div class="image"><img src="home-img.svg"/></div>
    <form action="index.php">
        <h1 class="lobster-regular">Login using  your details</h1>
        <input type="text" placeholder="Enter your username here"/>
        <input type="password" placeholder="Enter your password here"/>
        <a href="details.php" class="btnstyle">Submit</a>
    </form>
    </div>

</body>
</html>
<?php
include('database.php');
$nameerror="";
$numbererror="";
$emailerror="";
$dateerror="";
if(isset($_POST['submit'])){
extract($_POST);
if(empty($name)){
    $nameerror="Name is required";
}
if(empty($phonenumber)){
    $numbererror="Phone number is required";
}
if(empty($email)){
    $emailerror="Email is required";
}
if(empty($mydate)){
    $dateerror="Date is required";
}
if($name!="" && $phonenumber!="" && $email!="" && $mydate!=""){
    $sql="insert into info(name,phoneno,email,date) values ('$name','$phonenumber','$email','$mydate')";
    $conn->query($sql);
}
// print_r($_POST);
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment Form</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>
</head>
<body>
    <a href="index.html" class="styling">HOME <i class="fa-solid fa-heart-pulse"></i></a>
    <h2 class="headingstyle">APPOINTMENT NOW </h2>
    <div class="appointment">
        <img src="appointment-img.svg"/>
        <form action="appointment.php" method="POST">
            <h1>Make a Appointment</h1>
            <input type="text" placeholder="your name" name="name"/>
            <span class="error"><?php echo $nameerror?></span>
            <input placeholder="your number" name="phonenumber"/>
            <span class="error"><?php echo $numbererror?></span>
            <input type="email" placeholder="your email" name="email">
            <span class="error"><?php echo $emailerror?></span>
         <input type="date" id="mydate" name="mydate"/>
         <span class="error"><?php echo $dateerror?></span>
            <button class="appointmentbtn" name="submit">Appointment Now</button>
        </form>
    </div>
   <script>
// let btn = document.querySelector('.appointmentbtn');

// btn.addEventListener("click", function() {
//     setInterval(() => {
//         alert("Appointment has been booked");
//     },1000);
// });



   </script>
</body>
</html>
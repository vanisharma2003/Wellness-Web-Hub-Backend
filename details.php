<?php
include('database.php');
$sql="select * from info";
$result=$conn->query($sql);
// if($result->num_rows>0){
//     while($row=$result->fetch_assoc()){
//         echo "<pre>";
//         print_r($row);
//     }
// }
?>
<!-- Details -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details of patients</title>
    <link rel="stylesheet" href="style.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lobster&family=Pacifico&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>
</head>
<body>
    <div class="detail">
        <p class="lobster-regular">Details of Patients <i class="fa-solid fa-heart-circle-bolt"></i></p>

    <table class="table">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Email</th>
      <th scope="col">Date</th>
      <th scope="col">Patient Visited</th>
      <th scope="col">Patient Not Visited</th>
    </tr>
  </thead>
  <?php
    while($row=mysqli_fetch_assoc($result)) {
    ?>
  <tbody>
    <tr>
      <td><?php echo $row['name']?></td>
      <td><?php echo $row['phoneno']?></td>
      <td><?php echo $row['email']?></td>
      <td><?php echo $row['date']?></td>
       <td><input type="checkbox"/></td>
       <td><input type="checkbox"/></td> 
    </tr>
    <?php }?>
  </tbody>
</table>
</div>
</body>
</html>
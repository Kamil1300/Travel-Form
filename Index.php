<?php
$insert = false;
if(isset($_POST['Name'])){  


$server = "localhost";
$username = "root";
$password = "";

$con = mysqli_connect($server,$username,$password);

if(!$con) {
die("Connect to this database failed due to" . mysqli_connect_error());



}
// echo "Alhamdulillah";


$name = $_POST['Name'];
$gender = $_POST['Gender'];
$age = $_POST['Age'];
$email = $_POST['Email'];
$phonenumber = $_POST['Phone number'];
$desk = $_POST['desk'];

$sql = "INSERT INTO `kutch trip`.`trip` (`Name`, `Age`, `Gender`, `Email`, `Phone Number`, `Other`, `Date`) VALUES ('$name', '$age', '$gender', '$email', '$phonenumber', '$desk', CURRENT_TIMESTAMP());";

// echo $sql;

if($con->query($sql) == true){

    // echo "Successfully inserted";
    $insert = true;
}

else {
echo "ERROR: $sql <br> $con->error ";

}

$con->close();
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcome to Travel Form</title>
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+SC:wght@300&family=Gruppo&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <img src="sdcde.jpg" alt="SDCDE" class="SDCDE">
  <div class="container">
    <h1>Welcome to SDCDE Kutch Travel Form</h1>
    <p>Enter Your details and submit this form to confirm your participation in the trip</p>
    <?php 
    if ($insert == true) {
    echo "<p class='SubmitMsg'>Thanks for Submitting your form. <br>We are happy to see you joining us for the Kutch trip</p>"; } ?> 
    <form action="index.php" method="post">
      <input type="text" name="name" id="name" placeholder="Enter Your Name">
      <input type="text" name="age" id="age" placeholder="Enter Your Age">
      <input type="text" name="gender" id="gender" placeholder="Enter Your Gender">
      <input type="text" name="Email" id="Email" placeholder="Enter Your Email">
      <input type="text" name="Phone Number" id="Phone Number" placeholder="Enter Your Phone Number">
      <textarea name="desk" id="desk" cols="30" rows="10" placeholder="Enter any other information here"></textarea>
      <button class="btn">Submit</button>
      <!-- <button class="btn">Reset</button>  -->
    </form>
  </div>

  <script src="index.js"></script>
  
</body>

</html>
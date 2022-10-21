<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "kutch_trip_form";

$con = mysqli_connect($server,$username,$password,$database);

if(!$con){
die("Connection to this database failed due to" . mysqli_connect_error());
}
// echo "Success connecting to the db";
if($_SERVER["REQUEST_METHOD"] == "POST"){
$Name= $_POST['Name'];
$Gender= $_POST['Gender'];
$Age= $_POST['Age'];
$Email= $_POST['Email'];
$PhoneNumber= $_POST['PhoneNumber'];
$Other= $_POST['Other'];

$sql = "INSERT INTO `kutch_trip_form` . `trip` (`Name`, `Gender`, `Age`, `Email`, `PhoneNumber`, `Other`, `Date`) VALUES ('$Name', '$Gender', '$Age', '$Email', '$PhoneNumber', '$Other', CURRENT_TIMESTAMP);";
$result = mysqli_query($con,$sql);
// echo $sql;

if($result){
  echo "<p class='submitMsg'>Thanks for submitting your form. We are happy to see you joining us for the trip</p>";
}
else{
  echo "The record was not inserted Successfully because of this error ---> ". mysqli_error($con);
}
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

    <form action="/git/Travel-Website/index.php" method="post">
      <input type="text" name="Name" id="Name" placeholder="Enter Your Name">
      <input type="text" name="Age" id="Age" placeholder="Enter Your Age">
      <input type="text" name="Gender" id="Gender" placeholder="Enter Your Gender">
      <input type="Email" name="Email" id="Email" placeholder="Enter Your Email">
      <input type="PhoneNumber" name="PhoneNumber" id="PhoneNumber" placeholder="Enter Your Phone Number">
      <textarea name="Other" id="Other" cols="30" rows="10" placeholder="Enter any other information here"></textarea>
      <button class="btn">Submit</button>
      <!-- <button class="btn">Reset</button>  -->
    </form>
  </div>
</body>

</html>
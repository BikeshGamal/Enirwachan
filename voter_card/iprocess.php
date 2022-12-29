<?php
$email=$_POST["email"];
$comment=$_POST["comment"];
?>
<?php
$server="localhost";
$user="root";
$password="";
$db="signup"; 
$con=mysqli_connect($server,$user,$password,$db);
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
  }
  
  $sql = "INSERT INTO `inquiry_table` (`email`, `comment`) VALUES ('$email', '$comment')";
  
  if (mysqli_query($con, $sql)) {
    echo '<script>alert("**तपाइको सुझाब सफलतापुर्बक भण्डारण गरियो**")</script>';
    
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
 
?>

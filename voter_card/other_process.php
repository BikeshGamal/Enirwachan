<?php
$id=$_POST["id"];
$aqualify=$_POST["aqualify"];
$mlanguage=$_POST["mlanguage"];
$mobile=$_POST["mobile"];
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
  
  $sql = "INSERT INTO `others` (`id`,`aqualify`, `mlanguage`, `mobile`) VALUES ('$id','$aqualify', '$mlanguage', '$mobile')";
  
  if (mysqli_query($con, $sql)) {
    echo '<script>alert("**अन्य विवरण सफलतापुर्बक भण्डारण गरियो**")</script>';
    
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
 
?>

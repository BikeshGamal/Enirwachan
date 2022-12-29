<?php
$id=$_POST["id"];
$district=$_POST["district"];
$mun=$_POST["mun"];
$ward=$_POST["ward"];
$vp=$_POST["vp"];
$tname=$_POST["tname"];
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
  
  $sql = "INSERT INTO `permanent_address` (`id`,`district`, `mun`, `ward`, `vp`, `tname`) VALUES ('$id','$district', '$mun', '$ward', '$vp', '$tname')";
  
  if (mysqli_query($con, $sql)) {
    echo '<script>alert("**स्थाई बसोबास विवरण सफलतापुर्बक भण्डारण गरियो**")</script>';
    
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
 
?>

<?php
$id=$_POST["id"];
$cn=$_POST["cn"];
$rdistrict=$_POST["rdistrict"];
$rdate=$_POST["rdate"];
$district=$_POST["district"];
$mun=$_POST["mun"];
$ward=$_POST["ward"];
$dob=$_POST["dob"];
$ctype=$_POST["ctype"];
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
  
  $sql = "INSERT INTO `citizen_info` (`id`,`cn`, `rdistrict`, `rdate`, `district`, `mun`, `ward`,`dob`,`ctype`) VALUES ('$id','$cn', '$rdistrict', '$rdate', '$district', '$mun', '$ward','$dob','$ctype')";
  
  if (mysqli_query($con, $sql)) {
    echo '<script>alert("**नागरिकताको विवरण सफलतापुर्बक भण्डारण गरियो**")</script>';
    
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
 
?>

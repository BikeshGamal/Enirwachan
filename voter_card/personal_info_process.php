<?php
$id=$_POST["id"];
$fn=$_POST["fn"];
$gen=$_POST["gen"];
$sname=$_POST["sname"];
$fname=$_POST["fname"];
$mname=$_POST["mname"];
$gname=$_POST["gname"];
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
  
  $sql = "INSERT INTO `personel_info` (`id`,`fn`, `gen`, `sname`, `fname`, `mname`, `gname`) VALUES ('$id','$fn', '$gen', '$sname', '$fname', '$mname', '$gname')";
  
  if (mysqli_query($con, $sql)) {
    echo '<script>alert("**व्यक्तिगत विवरण सफलतापुर्बक भण्डारण गरियो**")</script>';
    
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
 
?>

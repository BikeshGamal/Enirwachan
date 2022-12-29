<?php
session_start();
if(!isset($_SESSION['user']))
{
    header('location:mainpage.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<style>
        a{
            color:white;
            background-color: green;
            text-decoration: none;
        }
        body{
            background:gray;
        }
        table,th,td{
            border:1px solid black;
        }
        td{
  text-align: left;
        }
        .d1{
            width:110px;
            background: gainsboro;
            color:black;
        }
        .d3{
            width:200px;
            background: gainsboro;
            color:balck;
        }
        legend{
      background: green;
      padding:35px;
    }
        .a1{
      padding:10px;
    }
    </style>
<?php include 'style.php'?>
    <?php include 'links.php'?>
    <title>Document</title>
</head>
<body>
<div class="container-fluid par py-2 pl-5">
        <div class="row">
            <div class="col-3">
                <img src="https://election.gov.np/static/media/logo.fdf1cfa1.png">
            </div>
            <div class="col-5 text-center pr-5"><h1 class="text-danger font-weight-bold">निर्वाचन आयोग नेपाल</h1>
            <h4 class="font-weight-light">कान्तिपथ, काठमाण्डौ</h4></div>
            <div class="col-4  pl-5">
                <img src=https://election.gov.np/static/media/logo-1.56a73d1a.png>
            </div>
        </div>
    </div>
    <div class="nav py-2">
        
        <ul class="line container-fluid par py-2 pl-5">
            <li><a href="infocollecter.php" class="pr-5">गृह पृष्ठ</a></li>
            <li><a href="inquiry.php" class="pr-5">सोधपुछ</a></li>
            <li><a href="form.php" class="pr-5">मतदाता परिचयपत्र फारम </a></li>
            <li><a href="votercard.php" class="pr-5">मतदाता विवरण</a></li>
            <li><div>
        <a href="logout.php" class="pr-5">लग -आउट  </a>
        </div></li>
        </ul>
        
    </div>
    <p class="mx-3 my-3"><b>द्रष्टब्य:कृपया आफ्नो बायोमेट्रीक इन्फोरमेसन प्रदान गर्न आउदा नेपाली नागरिकताको फोटोकपी एक प्रति 
         र यस मतदाता विवरणको प्रतिलिपि  एक प्रति पेश गर्न हुन बिनम्र अनुरोध गर्दछौ|यहाँहरुले गुगलमा गइ गो फुल पेज नामक एक्सटेन्सन 
         राखी यस विवरणको पि.डी.एफ डाउनलोड गर्न सक्नुहुनेछ र सोहि विवरण एक प्रति पेश गर्न सक्नु हुनेछ | धन्यबाद</b> </p>
         </body>
</html> 
<?php
$server="localhost";
$user="root";
$password="";
$db="signup"; 
$con=mysqli_connect($server,$user,$password,$db);
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
  }
  $id=$_POST["id"];
  $sql = "SELECT id,fn, gen, sname, fname, mname, gname from personel_info  WHERE id=$id";
  $result=mysqli_query($con, $sql) ;
  echo "<div class=mx-3>";
  echo "<h5 >व्यक्तिगत विवरण :</h5 >\n";
  echo"<table>
  <tr>
    <td><div class='d1'>पुरा नाम </div></td>
    <td><div class='d1'>लिङ्ग </div></td>
    <td><div class='d3'>पति/पत्नीको नाम </div></td>
    <td><div class='d1'>बाबुको नाम </div></td>
    <td><div class='d1'>आमाको नाम </div></td>
    <td><div class='d1'>बाजेको नाम </div></td>
    </tr>
    </table>";
  while($row=mysqli_fetch_assoc($result))
  {
    echo"<table>
    <tr>
    <td> <div class='d1'>$row[fn] </div></td>
    <td><div class='d1'>$row[gen]</div></td>
    <td><div class='d3'>$row[sname]</div></td>
    <td><div class='d1'>$row[fname]</div></td>
    <td><div class='d1'>$row[mname]</div></td>
    <td><div class='d1'>$row[gname]</div></td>
    </tr>
    </table>";
  }
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
  $id=$_POST["id"];
  $sql = "SELECT id,cn,rdistrict,rdate,district,mun, ward,dob,ctype from citizen_info WHERE id=$id";
  $result=mysqli_query($con, $sql) ;
  echo "<h5  class=my-3>नागरिकताको विवरण  :</h5 >\n";
  echo"<table>
  <tr>
    <td><div class='d1'>ना.प्र.न .</div></td>
    <td><div class='d1'>जारि जिल्ला  </div></td>
    <td><div class='d3'>जारि मिति </div></td>
    <td><div class='d1'>जिल्ला  </div></td>
    <td><div class='d1'>ना.पा /गा.पा </div></td>
    <td><div class='d1'>वडा न. </div></td>
    <td><div class='d1'>जन्म मिति  </div></td>
    <td><div class='d1'>ना.कि.</div></td>
    </tr>
    </table>";
  while($row=mysqli_fetch_assoc($result))
  {
    echo"<table>
    <tr>
    <td> <div class='d1'>$row[cn] </div></td>
    <td><div class='d1'>$row[rdistrict]</div></td>
    <td><div class='d3'>$row[rdate]</div></td>
    <td><div class='d1'>$row[district]</div></td>
    <td><div class='d1'>$row[mun]</div></td>
    <td><div class='d1'>$row[ward]</div></td>
    <td><div class='d1'>$row[dob]</div></td>
    <td><div class='d1'>$row[ctype]</div></td>
    </tr>
    </table>";
  }
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
  $id=$_POST["id"];
  $sql = "SELECT id,district,mun,ward,vp,tname from permanent_address WHERE id=$id";
  $result=mysqli_query($con, $sql) ;
  echo "<h5  class=my-3>स्थाई बसोबासको विवरण :</h5 >\n";
  echo"<table>
  <tr>
    <td><div class='d1'>जिल्ला  </div></td>
    <td><div class='d1'>ना.पा /गा.पा </div></td>
    <td><div class='d3'>वडा न. </div></td>
    <td><div class='d1'>मतदान स्थल </div></td>
    <td><div class='d1'>टोलको नाम </div></td>
    </tr>
    </table>";
  while($row=mysqli_fetch_assoc($result))
  {
    echo"<table>
    <tr>
    <td> <div class='d1'>$row[district] </div></td>
    <td><div class='d1'>$row[mun]</div></td>
    <td><div class='d3'>$row[ward]</div></td>
    <td><div class='d1'>$row[vp]</div></td>
    <td><div class='d1'>$row[tname]</div></td>
    </tr>
    </table>";
  }
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
  $id=$_POST["id"];
  $sql = "SELECT id,aqualify,mlanguage,mobile from others WHERE id=$id";
  $result=mysqli_query($con, $sql) ;
  echo "<h5 class=my-3>अन्य विवरण :</h5>\n";
  echo"<table>
  <tr>
    <td><div class='d1'>शैक्षिक योग्यता </div></td>
    <td><div class='d1'>मातृभाषा</div></td>
    <td><div class='d3'>सम्पर्क न.</div></td>
    </tr>
    </table>";
  while($row=mysqli_fetch_assoc($result))
  {
    echo"<table>
    <tr>
    <td> <div class='d1'>$row[aqualify] </div></td>
    <td><div class='d1'>$row[mlanguage]</div></td>
    <td><div class='d3'>$row[mobile]</div></td>
    </tr>
    </table>";
  }
  echo"<div class=my-5>";
?>

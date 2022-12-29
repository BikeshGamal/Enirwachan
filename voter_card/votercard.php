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
        <li><marquee class="text-light">१८ वर्ष उमेर पुरा भएका नेपाली नागरिकहरुले मतदाता परिचय पत्र बनाउन सक्नुहुनेछ ।  </marquee></li>
        </ul>
        
    </div>
    <p class="mx-3 my-3"><b>द्रष्टब्य:कृपया आफ्नो बायोमेट्रीक इन्फोरमेसन प्रदान गर्न आउदा नेपाली नागरिकताको फोटोकपी एक प्रति 
         र यस मतदाता विवरणको प्रतिलिपि  एक प्रति पेश गर्न हुन बिनम्र अनुरोध गर्दछौ| धन्यबाद</b> </p>
<form action="display.php" method="POST">
    <label for="id" class="mx-3" >मतदाता आईडी(अङ्कमा दिनुहोस)</label>
    <div class="col-sm-10">
      <input type="number" class="my-3" name="id" required>
        </div>
  </div>
  <button type="submit" class="btn btn-danger my-2 mx-3">पेश गर्नुहोस </button>

</form>
         </body>
</html> 

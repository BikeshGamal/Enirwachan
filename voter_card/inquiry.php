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
    <div class="mx-5">
    <p style="padding-top:20px;"><b>यहाँको जिज्ञासाको जवाफ यहाले नै उल्लेख गर्नुभएको इमेल ठेगानामा  यथाशिघ्र पाउनु हुनेछ धन्यवाद!!! </b></h5>
   <form action="iprocess.php" method="post">
    <br>
    इमेल ठेगाना : <input type="email" name="email" required><br><br>
    आफ्नो जिज्ञासा ब्यक्त गर्नुहोस: <textarea name="comment" required></textarea><br><br>
    <button type="submit" class="btn btn-danger my-4">पेश गर्नुहोस </button>
</div>
   </form>
</body>
</html>
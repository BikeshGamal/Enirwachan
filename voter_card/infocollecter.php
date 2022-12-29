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
<?php include 'style.php' ?>
  <?php include 'links.php' ?>
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
            <li><a href="votercard.php" class="pr-5">मतदाता विवरण </a></li>
            <li><div>
        <a href="logout.php" class="pr-5">लग -आउट  </a>
        </div></li>
        <li><marquee class="text-light">१८ वर्ष उमेर पुरा भएका नेपाली नागरिकहरुले मतदाता परिचय पत्र बनाउन सक्नुहुनेछ ।  </marquee></li>
        </ul>
        
    </div>
    <div class="evot"></div>
    <div class="container-fluid par py-4 pl-5 bg-text">
        <p style="text-align:justify;">अनलाइन मार्फत मतदाता परिचयपत्र फारम भर्ने हेतुले यस निर्वाचन आयोगको 
आधिकारिक वेबसाइटमा मतदाता परिचयपत्र फारम नामक सुबिधा थप गरिएको छ|
१८ वर्ष उमेर पुरा भइ नेपाली नागरिकता लिईसक्नु भएका महानुभावहरुले यो सुबिधा प्रयोग गर्न सक्नुहुनेछ।    
मतदाता परिचयपत्र फारम भर्नका निमित्त कृपया मतदाता परिचयपत्र फारम नामक विकल्प छनोट गर्नु होला। उक्त फारममा सहि बिबरण 
भरि  त्रुटीरहित मतदाता परिचय पत्र बनाउन सक्नुहुनेछ। यस सम्बन्धि थप जिज्ञासा वा सुझाब भए सोधपुछ नामक विकल्प छनोट गरि आफ्नो धारणा वा प्रतिक्रिया ब्यक्त गर्न सक्नुहुनेछ।
आधिकारिक प्रयोगकर्ताले सम्पूर्ण प्रक्रिया सहित फारम भरि पेश गरेको खण्डमा मतदाता विवरण नामक बिकल्प छनोट गरि आफ्नो मतदाता विवरण प्राप्त गर्न सक्नु हुनेछ।  
<br><br>
धन्यबाद। </p>
    </div>
</body>
</html>
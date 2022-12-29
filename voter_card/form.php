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
            <li><a href="votercard.php" class="pr-5">मतदाता विवरण </a></li>
            <li><div>
        <a href="logout.php" class="pr-5">लग -आउट  </a>
        </div></li>
        <li><marquee class="text-light">१८ वर्ष उमेर पुरा भएका नेपाली नागरिकहरुले मतदाता परिचय पत्र बनाउन सक्नुहुनेछ ।  </marquee></li>
        </ul>
    </div>
    <form action="personal_info_process.php" method="POST">
    <div class="container-fluid par py-4 pl-5">
    <legend>व्यक्तिगत विवरण </legend>
    <fieldset class="container-fluid par py-4 pl-5" style="border:5px solid gray; margin-top:20px;">
    <div class="row mb-3">
    <label for="id" class="col-sm-2 col-form-label">मतदाता आईडी(अङ्कमा दिनुहोस)</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" name="id" required>
        </div>
  </div>
    <div class="row mb-3">
    <label for="fn" class="col-sm-2 col-form-label">पुरा नाम </label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="fn" required>
        </div>
  </div>
  <div class="row mb-3">
    <label for="gender" class="col-sm-2 col-form-label">लिङ्ग</label>
<div class="col-sm-10">
    <select class="form control" name="gen">
    <option>छनोट गर्नुहोस </option>
        <option>पुरुष </option>
        <option>महिला </option>
        <option>अन्य </option>
    </select>
</div>
  </div>
  
  <div class="row mb-3">
    <label for="sname" class="col-sm-2 col-form-label">पति / पत्नीको नाम  </label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="sname" required>
    </div>
  </div>
  <div class="row mb-3">
    <label for="fname" class="col-sm-2 col-form-label">बाबुको नाम </label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="fname" required>
    </div>
  </div>
  <div class="row mb-3">
    <label for="mname" class="col-sm-2 col-form-label">आमाको नाम</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="mname" required>
    </div>
  </div>
  <div class="row mb-3">
    <label for="gname" class="col-sm-2 col-form-label">बाजेको नाम </label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="gname" required>
    </div>
  </div>
    </fieldset>
  <button type="submit" class="btn btn-danger my-4">पेश गर्नुहोस </button>
    </form>
    <form action="citizenship_info_process.php" method="POST">
    <legend>नागरिकता प्रमाणपत्रको विवरण  </legend>
        <fieldset class="container-fluid par py-4 pl-5" style="border:5px solid gray; margin-top:20px;">
        <div class="row mb-3">
    <label for="id" class="col-sm-2 col-form-label">मतदाता आईडी(अङ्कमा दिनुहोस)</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" name="id" required>
        </div>
  </div>
        <div class="row mb-3">
    <label for="cn" class="col-sm-2 col-form-label">नागरिकता प्र. न.  </label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="cn" required>
    </div>
  </div>
  <div class="row mb-3">
    <label for="rdistrict" class="col-sm-2 col-form-label">जारि जिल्ला  </label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="rdistrict"  required>
    </div>
  </div>
  <div class="row mb-3">
    <label for="rdate" class="col-sm-2 col-form-label">जारि मिति </label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="rdate" placeholder="yyyy/mm/dd" required>
    </div>
  </div>
  <div class="row mb-3">
    <label for="district" class="col-sm-2 col-form-label">जन्म स्थान जिल्ला </label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="district" required>
    </div>
  </div>
  <div class="row mb-3">
    <label for="mun" class="col-sm-2 col-form-label">गा.पा/ न.पा </label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="mun" required>
    </div>
  </div>
  <div class="row mb-3">
    <label for="ward" class="col-sm-2 col-form-label">वडा न. </label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="ward" required>
    </div>
  </div>
  <div class="row mb-3">
    <label for="dob" class="col-sm-2 col-form-label">जन्म मिति </label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="dob" placeholder="yyyy/mm/dd" required>
    </div>
  </div>
  <div class="row mb-3">
    <label for="ctype" class="col-sm-2 col-form-label">नागरिकताको किसिम  </label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="ctype" required>
    </div>
  </div>
        </fieldset>
        <button type="submit" class="btn btn-danger my-4">पेश गर्नुहोस </button>
    </div>
    </div>
</form>
<form action="permanent_address_process.php" method="POST">
<div class="container-fluid par  pl-5">
    <legend>स्थाई बसोबासको ठेगाना  </legend>
        <fieldset class="container-fluid par py-3 pl-5" style="border:5px solid gray; margin-top:20px;">
        <div class="row mb-3">
    <label for="id" class="col-sm-2 col-form-label">मतदाता आईडी(अङ्कमा दिनुहोस)</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" name="id" required>
        </div>
  </div>
        <div class="row mb-3">
    <label for="district" class="col-sm-2 col-form-label">जिल्ला</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="district" required>
    </div>
  </div>
  <div class="row mb-3">
    <label for="mun" class="col-sm-2 col-form-label">गा.पा/ न.पा </label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="mun"  required>
    </div>
  </div>
  <div class="row mb-3">
    <label for="ward" class="col-sm-2 col-form-label">वडा न.</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="ward" required>
    </div>
  </div>
  <div class="row mb-3">
    <label for="vp" class="col-sm-2 col-form-label">मतदान स्थल </label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="vp" required>
    </div>
  </div>
  <div class="row mb-3">
    <label for="tname" class="col-sm-2 col-form-label">गाउँ/टोलको नाम </label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="tname" required>
    </div>
  </div>
        </fieldset>
        <button type="submit" class="btn btn-danger my-4">पेश गर्नुहोस </button>
    </div>
    </form>
    <form  action="other_process.php" method="POST">
    <div class="container-fluid par py-2 pl-5">
    <legend>अन्य  </legend>
        <fieldset class="container-fluid par py-4 pl-5" style="border:5px solid gray; margin-top:20px;">
        <div class="row mb-3">
    <label for="id" class="col-sm-2 col-form-label">मतदाता आईडी(अङ्कमा दिनुहोस)</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" name="id" required>
        </div>
  </div>
        <div class="row mb-3">
    <label for="aqualify" class="col-sm-2 col-form-label">शैक्षिक स्थिति</label>
<div class="col-sm-10">
    <select class="form control" name="aqualify">
    <option>छनोट गर्नुहोस </option>
    <option>निरक्षर </option>
        <option>प्राथमिक तह  </option>
        <option>माध्यमिक तह </option>
        <option>उच्च माध्यमिक तह  </option>
        <option>स्नातक तह </option>
        <option>स्नातकोत्तर तह </option>
        <option>विद्यावारीधि  तह </option>
    </select>
</div>
  </div>
  <div class="row mb-3">
    <label for="mlanguage" class="col-sm-2 col-form-label">मातृभाषा </label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="mlanguage"  required>
    </div>
  </div>
  <div class="row mb-3">
    <label for="mobile" class="col-sm-2 col-form-label">मोबाईल न.</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="mobile" required>
    </div>
  </div>
        </fieldset>
        <button type="submit" class="btn btn-danger my-4">पेश गर्नुहोस </button>
    </div>
    </from>
</body>
</html>

    
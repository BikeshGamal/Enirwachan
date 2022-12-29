<?php
session_start();
?>
<!doctype html>
<html lang="en">
<head>
  <?php include 'style.php' ?>
  <?php include 'links.php' ?>
  <title>Registration page</title>
</head>

<body>
  <?php
  include 'databasecon.php';
  if (isset($_POST['submit'])) {
    $email =$_POST['email'];
    $password =  $_POST['password'];
    $email_search = "select *from register where email='$email'";
    $query = mysqli_query($con, $email_search);
    $emailcount = mysqli_num_rows($query);
    if ($emailcount ) {
      $email_pass=mysqli_fetch_assoc($query);
      $db_pass=$email_pass['password'];
      $_SESSION['user']=$email_pass['email'];
      $pass_decode=password_verify($password,$db_pass);
      if($pass_decode)
      {
        //echo "Log in Successfully....";
        ?>
        <script>
            location.replace("infocollecter.php");
        </script>
        <?php
      }
      else{
        ?>
        <script>
          alert("गलत पासवर्ड प्रविष्ट गर्नुभयो। कृपया पुन: प्रयास गर्नुहोला।");
        </script>
        <?php
      
      }
      
     
    } 
    else{
      ?>
      <script>
        alert("गलत इमेल प्रविष्ट गर्नुभयो। कृपया पुन: प्रयास गर्नुहोला।");
      </script>
      <?php
    }
}
  ?>
  <div class="card bg-light" style="height:100vh;">
    <article class="card-body mx-auto" style="max-width:400px;">
      <h4 class="card-title mt-3 mb-4 text-center text-danger fs-2"><strong>निर्वाचन आयोग</strong></h4>
      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" autocomplete="off">
        <div class="ff text-center">
          <legend class="bg-danger text-light">
            लग - इन</legend>
          <div class="form-group input-group m">
            <input name="email" class="form-control hc" placeholder="इ-मेल ठेगाना" type="email" required>
          </div>
          
          <div class="form-group input-group m">
            <input name="password" class="form-control hc" placeholder="
पासवर्ड" type="password" required>
          </div>
          
          <div class="form-group">
            <button type="submit" name="submit" class="btn btn-danger btn-block">लग-इन गर्नुहोस</button>
            <p class="text-center m-3 aa">खाता छैन?<a href="register.php">
            खाता खोल्नुहोस्</a></p>
          </div>
        </div>
      </form>
    </article>
  </div>
</body>

</html>
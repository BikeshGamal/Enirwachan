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
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $mobile = mysqli_real_escape_string($con, $_POST['mobile']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);
    $pass = password_hash($password, PASSWORD_BCRYPT);
    $cpass = password_hash($cpassword, PASSWORD_BCRYPT);
    $emailquery = "select *from register where email='$email'";
    $query = mysqli_query($con, $emailquery);
    $emailcount = mysqli_num_rows($query);
    if ($emailcount > 0) {
      ?>
      <script>
        alert("इमेल पहिले नै अवस्थित छ......");
      </script>
      <?php
    } else {
      if ($password === $cpassword) {
        $insertquery = "insert into register(name,email,phone,password,cpassword) 
          values('$username','$email','$mobile','$pass','$cpass')";
        $iquery = mysqli_query($con, $insertquery);
        if ($iquery) {
  ?>
          <script>
            alert("सफलतापूर्वक खाता सिर्जना गरियो......");
          </script>
          <?php
        } else { 
          ?>
            <script>
              alert("ERRRR!!!");
            </script>
  <?php
          }
        
      } else {
        ?>
          <script>
            alert("पासवर्डहरू समान छैनन् |");
          </script>
          <?php
      }
    }
  }
  ?>
  <div class="card bg-light" style="height:100vh;">
    <article class="card-body mx-auto" style="max-width:400px;">
      <h4 class="card-title mt-3 mb-4 text-center text-danger fs-2"><strong>निर्वाचन आयोग</strong></h4>
      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" autocomplete="off">
        <div class="ff text-center">
          <legend class="bg-danger text-light">
            खाता सिर्जना गर्नुहोस</legend>
          <div class="form-group input-group m">
            <input name="username" class="form-control hc" placeholder="
पुरा नाम" type="text" required>
          </div>
          <div class="form-group input-group m">
            <input name="email" class="form-control hc" placeholder="इ-मेल ठेगाना" type="email" required>
          </div>
          <div class="form-group input-group m">
            <input name="mobile" class="form-control hc" placeholder="मोबाइल नम्बर" type="text" required>
          </div>
          <div class="form-group input-group m">
            <input name="password" class="form-control hc" placeholder="
पासवर्ड" type="password" required>
          </div>
          <div class="form-group input-group m">
            <input name="cpassword" class="form-control hc" placeholder=" पासवर्ड पुन: लेख्नुहोस" type="password" required>
          </div>
          <div class="form-group">
            <button type="submit" name="submit" class="btn btn-danger btn-block">खाता खोल्नुहोस्</button>
            <p class="text-center m-3 aa">खाता छ?<a href="login.php">
                लग-इन गर्नुहोस</a></p>
          </div>
        </div>
      </form>
    </article>
  </div>
</body>

</html>
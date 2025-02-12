<?php
define("PATH","http://realestate.test");
require_once("../html.php");
require_once("../config/config.php");

if (isset($_POST['submit'])) {
  if (empty($_POST['email']) || empty($_POST['password'])) {
    echo "<script>alert('Some inputs are empty');</script>";
  }else {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $login = $conn->prepare("SELECT * FROM user WHERE email=:email");
    $login->execute([":email"=>$email]);
    $user = $login->fetch(PDO::FETCH_ASSOC);
    if ($login->rowCount()>0) {
      if (password_verify($password,$user['password'])) {
        $_SESSION['user_id'] = $user['user_id'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['email'] = $user['email'];
        header("location: ".PATH);
      }else {
        echo "<script>alert('Email or Password is wrong');</script>";
      }
    }else {
      echo "<script>alert('Email is wrong');</script>";
    }
  }
}



?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Homeland &mdash; Colorlib Website Template</title>
    <?php require_once("../includes/head.php"); ?>
  </head>
  <body>
  
  <div class="site-loader"></div>
  
  <div class="site-wrap">

  <?php require_once("../includes/navbar.php") ?>

    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(<?= PATH ?>/images/hero_bg_2.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">
          <div class="col-md-10">
            <h1 class="mb-2">Log In</h1>
          </div>
        </div>
      </div>
    </div>
    

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12" data-aos="fade-up" data-aos-delay="100">
            <h3 class="h4 text-black widget-title mb-3">Login</h3>
            <form action="login.php" method="post" class="form-contact-agent">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control">
            </div>
            <div class="form-group">
                <input type="submit" name="submit" id="phone" class="btn btn-primary" value="Login">
            </div>
            </form>
          </div>
         
        </div>
      </div>
    </div>
    <?php require_once("../includes/footer.php"); ?>
  </div>

<?php require_once("../includes/script.php"); ?>
  
</body>
</html>
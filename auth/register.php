<?php
require_once("../config/config.php");
require_once("../html.php");
define("PATH","http://realestate.test");
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
            <h1 class="mb-2">Register</h1>
          </div>
        </div>
      </div>
    </div>
    

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12" data-aos="fade-up" data-aos-delay="100">
            <h3 class="h4 text-black widget-title mb-3">Register</h3>
            <form action="" class="form-contact-agent">

            <div class="form-group">
                <label for="email">Username</label>
                <input type="username" id="username" class="form-control">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" class="form-control">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" class="form-control">
            </div>
            <div class="form-group">
                <input type="submit" id="phone" class="btn btn-primary" value="Register">
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
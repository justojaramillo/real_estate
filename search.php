<?php
@session_start();
define("PATH","http://realestate.test");
require_once("html.php");
require_once("config/config.php");

$select = $conn->prepare("SELECT * FROM property");
$select->execute();
$properties = $select->fetchAll(PDO::FETCH_OBJ);

if (isset($_POST['submit'])) {
    $type = $_POST['type'];
    $offer = $_POST['offer'];
    $city = $_POST['city'];

    $search = $conn->prepare("SELECT * FROM property WHERE home_type=:type OR type=:offer OR location like '%:city%'");
    $search->execute([":type"=>$type, ":offer"=>$offer, ":city"=>$city]);
    $listings = $search->fetchAll(pdo::FETCH_OBJ);
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Homeland &mdash;&mdash; Colorlib Website Template</title>
    <?php require_once("./includes/head.php") ?>
  </head>
  <body>
  
  <div class="site-loader"></div>
  
  <div class="site-wrap">

    <?php require_once("includes/navbar.php"); ?>
    <div class="slide-one-item home-slider owl-carousel">

      <?php foreach($properties as $property): ?>
        <div class="site-blocks-cover overlay" style="background-image: url(images/<?= $property->image ?>);" data-aos="fade" data-stellar-background-ratio="0.5">
          <div class="container">
            <div class="row align-items-center justify-content-center text-center">
              <div class="col-md-10">
                <span class="d-inline-block bg-<?= $property->type=="Rent"?"success":"danger" ?> text-white px-3 mb-3 property-offer-type rounded">For <?= $property->type ?></span>
                <h1 class="mb-2"><?= $property->name ?></h1>
                <p class="mb-5"><strong class="h2 text-success font-weight-bold">$ <?= number_format($property->price,2,'.',',') ?></strong></p>
                <p><a href="property-details.php?id=<?= $property->property_id ?>" class="btn btn-white btn-outline-white py-3 px-5 rounded-0 btn-2">See Details</a></p>
              </div>
            </div>
          </div>
        </div>  
      <?php endforeach; ?>

    </div>


    <?php require_once("includes/search.php"); ?>

        <div class="row">
          <div class="col-md-12">
            <div class="view-options bg-white py-3 px-3 d-md-flex align-items-center">
              <div class="mr-auto">
                <a href="index.php" class="icon-view view-module active"><span class="icon-view_module"></span></a>
                <a href="view-list.php" class="icon-view view-list"><span class="icon-view_list"></span></a>
                
              </div>
              <div class="ml-auto d-flex align-items-center">
                <div>
                  <a href="#" class="view-list px-3 border-right active">All</a>
                  <a href="#" class="view-list px-3 border-right">Rent</a>
                  <a href="#" class="view-list px-3">Sale</a>
                </div>


                <div class="select-wrap">
                  <span class="icon icon-arrow_drop_down"></span>
                  <select class="form-control form-control-sm d-block rounded-0">
                    <option value="">Sort by</option>
                    <option value="">Price Ascending</option>
                    <option value="">Price Descending</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
        </div>
       
      </div>
    </div>

    <div class="site-section site-section-sm bg-light">
        <div class="container">
            <?php foreach($listings as $list): ?>
                <div class="row mb-5">
                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="property-entry h-100">
                            <a href="property-details.html" class="property-thumbnail">
                                <div class="offer-type-wrap">
                                <span class="offer-type bg-danger">Sale</span>
                                <span class="offer-type bg-success">Rent</span>
                                </div>
                                <img src="images/img_1.jpg" alt="Image" class="img-fluid">
                            </a>
                            <div class="p-4 property-body">
                                <a href="#" class="property-favorite"><span class="icon-heart-o"></span></a>
                                <h2 class="property-title"><a href="property-details.html">625 S. Berendo St</a></h2>
                                <span class="property-location d-block mb-3"><span class="property-icon icon-room"></span> 625 S. Berendo St Unit 607 Los Angeles, CA 90005</span>
                                <strong class="property-price text-primary mb-3 d-block text-success">$2,265,500</strong>
                                <ul class="property-specs-wrap mb-3 mb-lg-0">
                                <li>
                                    <span class="property-specs">Beds</span>
                                    <span class="property-specs-number">2 <sup>+</sup></span>
                                    
                                </li>
                                <li>
                                    <span class="property-specs">Baths</span>
                                    <span class="property-specs-number">2</span>
                                    
                                </li>
                                <li>
                                    <span class="property-specs">SQ FT</span>
                                    <span class="property-specs-number">7,000</span>  
                                </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    

    <?php require_once("./includes/footer.php") ?>

  </div>
  <?php require_once("./includes/script.php")     ?>
  </body>
</html>
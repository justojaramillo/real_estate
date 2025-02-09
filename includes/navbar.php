<?php
require_once("html.php");
?>
<div class="site-mobile-menu">
    <div class="site-mobile-menu-header">
    <div class="site-mobile-menu-close mt-3">
        <span class="icon-close2 js-menu-toggle"></span>
    </div>
    </div>
    <div class="site-mobile-menu-body"></div>
</div> <!-- .site-mobile-menu -->
<div class="site-navbar mt-4">
    <div class="container py-1">
        <div class="row align-items-center">
            <div class="col-8 col-md-8 col-lg-4">
                <h1 class="mb-0"><a href="index.php" class="text-white h2 mb-0"><strong>Homeland<span class="text-danger">.</span></strong></a></h1>
            <?= html::div(false); ?>
            <div class="col-4 col-md-4 col-lg-8">
                <nav class="site-navigation text-right text-md-right" role="navigation">

                    <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

                    <ul class="site-menu js-clone-nav d-none d-lg-block">
                        <li class="active">
                            <a href="index.php">Home</a>
                        </li>
                        <li><a href="buy.php">Buy</a></li>
                        <li><a href="rent.php">Rent</a></li>
                        <li class="has-children">
                        <a href="properties.php">Properties</a>
                        <ul class="dropdown arrow-top">
                            <li><a href="#">Condo</a></li>
                            <li><a href="#">Property Land</a></li>
                            <li><a href="#">Commercial Building</a></li>
                            
                        </ul>
                        </li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="contact.php">Contact</a></li>
                        <li><a href="login.php">Login</a></li>
                        <li><a href="register.php">Register</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
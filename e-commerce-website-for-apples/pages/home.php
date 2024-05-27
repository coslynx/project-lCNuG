// File: home.php

<?php
include '../includes/header.php';
?>

<!-- Home Page Content -->

<div class="container">
    <h1>Welcome to our Apple Store!</h1>
    <p>Explore our wide range of apple products and enjoy the freshness!</p>

    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <img src="../assets/images/apple1.jpg" class="card-img-top" alt="Apple 1">
                <div class="card-body">
                    <h5 class="card-title">Fresh Apples</h5>
                    <p class="card-text">Delicious and juicy apples picked from the orchard.</p>
                    <a href="products.php" class="btn btn-primary">View Products</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <img src="../assets/images/apple2.jpg" class="card-img-top" alt="Apple 2">
                <div class="card-body">
                    <h5 class="card-title">Apple Pies</h5>
                    <p class="card-text">Homemade apple pies with the perfect blend of flavors.</p>
                    <a href="products.php" class="btn btn-primary">View Products</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <img src="../assets/images/apple3.jpg" class="card-img-top" alt="Apple 3">
                <div class="card-body">
                    <h5 class="card-title">Apple Juices</h5>
                    <p class="card-text">Refreshing apple juices made from handpicked apples.</p>
                    <a href="products.php" class="btn btn-primary">View Products</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include '../includes/footer.php';
?>
// product-details.php

<?php
include('../includes/header.php');
include('../includes/functions.php');
?>

<main>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Product Details</h1>
                <div class="product-details">
                    <img src="../assets/images/apple1.jpg" alt="Apple" class="product-image">
                    <div class="product-info">
                        <h2>Apple Name</h2>
                        <p>Price: $10</p>
                        <p>Description: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin euismod eros nec semper consequat.</p>
                        <p>Nutritional Information: Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <div class="ratings">
                            <p>Rating: 4.5</p>
                            <p>Customer Reviews:</p>
                            <ul>
                                <li>Great apples, very fresh!</li>
                                <li>Loved the quality of these apples.</li>
                            </ul>
                        </div>
                        <button class="btn btn-primary">Add to Cart</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
include('../includes/footer.php');
?>
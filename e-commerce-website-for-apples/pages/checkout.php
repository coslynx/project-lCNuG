<!-- File: checkout.php -->

<?php
include '../includes/header.php';
?>

<main>
    <section class="checkout">
        <div class="container">
            <h2>Checkout</h2>
            <form action="process_order.php" method="post">
                <label for="fname">First Name:</label>
                <input type="text" id="fname" name="fname" required><br><br>

                <label for="lname">Last Name:</label>
                <input type="text" id="lname" name="lname" required><br><br>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required><br><br>

                <label for="address">Address:</label>
                <input type="text" id="address" name="address" required><br><br>

                <label for="city">City:</label>
                <input type="text" id="city" name="city" required><br><br>

                <label for="zip">Zip Code:</label>
                <input type="text" id="zip" name="zip" required><br><br>

                <label for="country">Country:</label>
                <input type="text" id="country" name="country" required><br><br>

                <button type="submit">Place Order</button>
            </form>
        </div>
    </section>
</main>

<?php
include '../includes/footer.php';
?>
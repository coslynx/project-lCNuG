// File: functions.php

<?php

// Function to connect to the database
function connectDB() {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "apple_ecommerce";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    return $conn;
}

// Function to get all products from the database
function getProducts() {
    $conn = connectDB();

    $sql = "SELECT * FROM products";
    $result = $conn->query($sql);

    $products = array();

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $products[] = $row;
        }
    }

    $conn->close();

    return $products;
}

// Function to get a specific product by ID
function getProductById($id) {
    $conn = connectDB();

    $sql = "SELECT * FROM products WHERE id = $id";
    $result = $conn->query($sql);

    $product = null;

    if ($result->num_rows == 1) {
        $product = $result->fetch_assoc();
    }

    $conn->close();

    return $product;
}

// Function to add a new product to the database
function addProduct($name, $price, $description) {
    $conn = connectDB();

    $sql = "INSERT INTO products (name, price, description) VALUES ('$name', '$price', '$description')";

    if ($conn->query($sql) === TRUE) {
        return true;
    } else {
        return false;
    }

    $conn->close();
}

?>
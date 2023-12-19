<?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        require ("config.php");

        if (!empty($_POST["name"]) && !empty($_POST["category"]) && !empty($_POST["price"])) {
            $name = $_POST["name"];
            $category = $_POST["category"];
            $description = $_POST["description"];
            $price = $_POST["price"];

            $sql = "INSERT INTO products (name, category, description, price) VALUES ('$name', '$category', '$description', $price)";

            $conn -> query($sql);

            header("Location: ./index.php");
        }
    }
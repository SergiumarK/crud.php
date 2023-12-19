<?php
    require ("./config.php");

    $sql = "SELECT * FROM products";
    $result = $conn -> query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <a href="index.php">Home</a>
        <a href="create.php">Create</a>
    </header>

    <main>
        <?php
            if ($result -> num_rows > 0) {
                while ($row = $result -> fetch_assoc()) {
                    echo "<p>$row[name], $row[category], $row[price]$</p>";
                }
            }
        ?>
    </main>
</body>
</html>
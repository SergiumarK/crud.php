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
        <h1>Create</h1>
        <form action="save.php" method="post">
            <input type="text" name="name" placeholder="Name">
            <input type="text" name="category" placeholder="Category">
            <textarea name="description"  cols="30" rows="10"></textarea>
            <input type="number" name="price" placeholder="Price">
            <button>Create</button>
        </form>
    </main>
</body>
</html>
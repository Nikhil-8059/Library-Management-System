
<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $author = $_POST['author'];
    $genre = $_POST['genre'];
    $publication_year = $_POST['publication_year'];
    $isbn = $_POST['isbn'];

    $sql = "INSERT INTO books (title, author, genre, publication_year, isbn) VALUES ('$title', '$author', '$genre', '$publication_year', '$isbn')";
    if ($conn->query($sql) === TRUE) {
        echo "New book added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Book</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        form { width: 300px; margin-bottom: 20px; }
        label { display: block; margin-bottom: 5px; }
        input[type="text"], input[type="number"] { width: 100%; padding: 8px; margin-bottom: 10px; border: 1px solid #ddd; border-radius: 4px; }
        button { padding: 10px 15px; background-color: #4CAF50; color: white; border: none; border-radius: 4px; cursor: pointer; }
        button:hover { background-color: #45a049; }
    </style>
</head>
<body>
    <h1>Add New Book</h1>
    <form action="add_book.php" method="POST">
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" required>

        <label for="author">Author:</label>
        <input type="text" id="author" name="author" required>

        <label for="genre">Genre:</label>
        <input type="text" id="genre" name="genre" required>

        <label for="publication_year">Publication Year:</label>
        <input type="number" id="publication_year" name="publication_year" required>

        <label for="isbn">ISBN:</label>
        <input type="text" id="isbn" name="isbn" required>

        <button type="submit">Add Book</button>
    </form>
    <a href="index.php">Back to Book Catalog</a>
</body>
</html>
=======
<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $author = $_POST['author'];
    $genre = $_POST['genre'];
    $publication_year = $_POST['publication_year'];
    $isbn = $_POST['isbn'];

    $sql = "INSERT INTO books (title, author, genre, publication_year, isbn) VALUES ('$title', '$author', '$genre', '$publication_year', '$isbn')";
    if ($conn->query($sql) === TRUE) {
        echo "New book added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Book</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        form { width: 300px; margin-bottom: 20px; }
        label { display: block; margin-bottom: 5px; }
        input[type="text"], input[type="number"] { width: 100%; padding: 8px; margin-bottom: 10px; border: 1px solid #ddd; border-radius: 4px; }
        button { padding: 10px 15px; background-color: #4CAF50; color: white; border: none; border-radius: 4px; cursor: pointer; }
        button:hover { background-color: #45a049; }
    </style>
</head>
<body>
    <h1>Add New Book</h1>
    <form action="add_book.php" method="POST">
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" required>

        <label for="author">Author:</label>
        <input type="text" id="author" name="author" required>

        <label for="genre">Genre:</label>
        <input type="text" id="genre" name="genre" required>

        <label for="publication_year">Publication Year:</label>
        <input type="number" id="publication_year" name="publication_year" required>

        <label for="isbn">ISBN:</label>
        <input type="text" id="isbn" name="isbn" required>

        <button type="submit">Add Book</button>
    </form>
    <a href="index.php">Back to Book Catalog</a>
</body>
</html>


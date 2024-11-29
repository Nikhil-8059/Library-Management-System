<?php
include 'db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM books WHERE id=$id";
    $result = $conn->query($sql);
    $book = $result->fetch_assoc();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $author = $_POST['author'];
    $genre = $_POST['genre'];
    $publication_year = $_POST['publication_year'];
    $isbn = $_POST['isbn'];

    $sql = "UPDATE books SET title='$title', author='$author', genre='$genre', publication_year='$publication_year', isbn='$isbn' WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        echo "Book updated successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Book</title>
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
    <h1>Edit Book</h1>
    <form action="edit_book.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $book['id']; ?>">
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" value="<?php echo $book['title']; ?>" required>

        <label for="author">Author:</label>
        <input type="text" id="author" name="author" value="<?php echo $book['author']; ?>" required>

        <label for="genre">Genre:</label>
        <input type="text" id="genre" name="genre" value="<?php echo $book['genre']; ?>" required>

        <label for="publication_year">Publication Year:</label>
        <input type="number" id="publication_year" name="publication_year" value="<?php echo $book['publication_year']; ?>" required>

        <label for="isbn">ISBN:</label>
        <input type="text" id="isbn" name="isbn" value="<?php echo $book['isbn']; ?>" required>

        <button type="submit">Update Book</button>
    </form>
    <a href="index.php">Back to Book Catalog</a>
</body>
</html>

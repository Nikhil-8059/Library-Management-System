<<<<<<< HEAD
<?php
include 'db.php';

// Fetch all books
$sql = "SELECT * FROM books";
$result = $conn->query($sql);
$books = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $books[] = $row;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Library Management System</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        table { width: 100%; border-collapse: collapse; margin-bottom: 20px; }
        table, th, td { border: 1px solid #ddd; }
        th, td { padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
        a { text-decoration: none; color: #00f; }
        a:hover { text-decoration: underline; }
        .box { width: 300px; padding: 10px; border: 1px solid #ddd; margin-bottom: 20px; }
    </style>
</head>
<body>
    <h1>Library Management System</h1>
    <div class="box">
        <a href="add_book.php">Add New Book</a>
    </div>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Author</th>
                <th>Genre</th>
                <th>Year</th>
                <th>ISBN</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($books as $book): ?>
                <tr>
                    <td><?php echo $book['id']; ?></td>
                    <td><?php echo $book['title']; ?></td>
                    <td><?php echo $book['author']; ?></td>
                    <td><?php echo $book['genre']; ?></td>
                    <td><?php echo $book['year']; ?></td>
                    <td><?php echo $book['isbn']; ?></td>
                    <td>
                        <a href="edit_book.php?id=<?php echo $book['id']; ?>">Edit</a>
                        <a href="delete_book.php?id=<?php echo $book['id']; ?>">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
=======
<?php
include 'db.php';

// Fetch all books
$sql = "SELECT * FROM books";
$result = $conn->query($sql);
$books = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $books[] = $row;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Library Management System</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        table { width: 100%; border-collapse: collapse; margin-bottom: 20px; }
        table, th, td { border: 1px solid #ddd; }
        th, td { padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
        a { text-decoration: none; color: #00f; }
        a:hover { text-decoration: underline; }
        .box { width: 300px; padding: 10px; border: 1px solid #ddd; margin-bottom: 20px; }
    </style>
</head>
<body>
    <h1>Library Management System</h1>
    <div class="box">
        <a href="add_book.php">Add New Book</a>
    </div>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Author</th>
                <th>Genre</th>
                <th>Year</th>
                <th>ISBN</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($books as $book): ?>
                <tr>
                    <td><?php echo $book['id']; ?></td>
                    <td><?php echo $book['title']; ?></td>
                    <td><?php echo $book['author']; ?></td>
                    <td><?php echo $book['genre']; ?></td>
                    <td><?php echo $book['year']; ?></td>
                    <td><?php echo $book['isbn']; ?></td>
                    <td>
                        <a href="edit_book.php?id=<?php echo $book['id']; ?>">Edit</a>
                        <a href="delete_book.php?id=<?php echo $book['id']; ?>">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
>>>>>>> bc5312da7aeb609ebc998dd60c9f4b8fc5d4d598

<<<<<<< HEAD
<?php
include 'db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM books WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        echo "Book deleted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
header("Location: index.php");
?>
=======
<?php
include 'db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM books WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        echo "Book deleted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
header("Location: index.php");
?>
>>>>>>> bc5312da7aeb609ebc998dd60c9f4b8fc5d4d598

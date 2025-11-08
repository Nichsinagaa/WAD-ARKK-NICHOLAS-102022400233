<?php
include 'connect.php';

// ==============1===============
// If statement untuk mengecek POST request dari form
// Lalu definisikan variabel2 untuk menyimpan data yang dikirim dari POST
if (isset($_POST['create'])) {
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $categoryId = (int)$_POST['category_id'];
    $author = mysqli_real_escape_string($conn, $_POST['author']);
    $stock = (int)$_POST['stock'];

    // ===============2===============
    // Definisikan $query untuk melakukan tambah data ke database
    $query = "INSERT INTO books (title, category_id, author, stock) VALUES ('$title', $categoryId, '$author', $stock)";
    
    // ==============3================
    // Eksekusi query
    if (mysqli_query($conn, $query)) {
        header("Location: list_books.php");
        exit;
    } else {
        echo "
        <script>
            alert('Failed to add book'); 
            window.location='form_create_book.php';
        </script>
        ";
        exit;
    }
}
?>
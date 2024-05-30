<?php
include("connection.php");

if (isset($_POST["submit"])) {
    $id = htmlentities(strip_tags(trim($_POST["id"])));
    $id = mysqli_real_escape_string($connection, $id);
    
    $query = "SELECT nama, nim FROM mahasiswa WHERE id='$id'";
    $result = mysqli_query($connection, $query);
    $data = mysqli_fetch_assoc($result);
    
    $nim = $data["nim"];
    $nama = $data["nama"];
    
    $query = "DELETE FROM mahasiswa WHERE id='$id'";
    $result = mysqli_query($connection, $query);
    
    if ($result) {
        $message = "Mahasiswa dengan nama \"<b>$nama</b>\" dan Nim \"<b>$nim</b>\" sudah berhasil dihapus";
        $message = urlencode($message);
        header("Location: index.php?message={$message}");
    } else {
        die("Query Error: " . mysqli_errno($connection) . " - " . mysqli_error($connection));
    }
}
?>

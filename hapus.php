<?php
include 'database.php';

$id = $_GET['id'];
mysqli_query($conn, "DELETE FROM mahasiswa WHERE id=$id");

header("Location: index.php");
?>
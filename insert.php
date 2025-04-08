<?php
include 'database.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $jurusan = $_POST['jurusan'];

    $query = "INSERT INTO mahasiswa (nim, nama, jurusan) VALUES ('$nim', '$nama', '$jurusan')";
    if (mysqli_query($conn, $query)) {
        echo "Data berhasil ditambahkan";
        header("Location: index.php");
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }

    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Tambah Mahasiswa</h2>
    <form method="POST">
        NIM     : <input type="text" name="nim" required><br><br>
        Nama    : <input type="text" name="nama" required><br><br>
        Jurusan : <input type="text" name="jurusan" required><br><br>
        <input type="submit" value="Tambah">
    </form>

</body>

</html>
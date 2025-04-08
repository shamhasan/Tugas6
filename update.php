<?php
include 'database.php';

$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM mahasiswa WHERE id=$id");
$data = mysqli_fetch_assoc($result);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $jurusan = $_POST['jurusan'];

    $query = "UPDATE mahasiswa SET nama='$nama', nim='$nim', jurusan = '$jurusan' WHERE id=$id";
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
    <h2>Edit Mahasiswa</h2>
    <form method="POST">
        NIM     : <input type="text" name="nim" value="<?= $data["nim"]?>>" required><br><br>
        Nama    : <input type="text" name="nama" value="<?= $data["nama"]?>" required><br><br>
        Jurusan : <input type="text" name="jurusan" value="<?= $data["jurusan"]?>" required><br><br>
        <input type="submit" value="Tambah">
    </form>

</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Tambah Data Mahasiswa</h2>
    <form action="proses_tambah_mahasiswa.php" method="POST">
        <label>Nama</label>
        <input type="text" name="nama" required><br>
        <label>NIM</label>
        <input type="text" name="nim" required><br>
        <label>Email</label>
        <input type="text" name="email" required><br>
        <label>Nomor</label>
        <input type="text" name="nomor" required><br>
        <label>Jurusan</label>
        <input type="text" name="jurusan" required><br>

        <input type="submit" name="Tambah" required>
    </from>
</body>
</html>
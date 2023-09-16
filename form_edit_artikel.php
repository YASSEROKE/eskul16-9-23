<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="aksi_tambah_artikel.php" method="post">
        <label for="judul">Judul Artikel</label>
        <input type="text" name="judul" id="judul" value="---"><br>
        <label for="penulis">Penulis</label>
        <input type="text" name="penulis" id="penulis" value=""><br>
        <label for="tanggal">Tanggal</label>
        <input type="date" name="tanggal" id="tanggal" value=""><br>
        <label for="teks">Teks</label>
        <input type="text" name="teks" id="teks" value=""><br>
        <label for="gambar">Gambar</label>
        <input type="file" name="gambar" id="gambar" value=""><br>
        <input type="submit" value="submit">
</body>
</html>
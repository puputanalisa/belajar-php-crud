<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Form Peminjaman Buku</h1>
    <form action="form_proses.php" method= "POST">
        <div>
            <label for="">nama</label><br>
            <input type="text" name="nama">
        </div>
        <div>
            <label for="">Judul Buku</label><br>
            <input type="text" name="judul_buku">
        </div>
        <div>
            <br>
            <button type="submit">Simpan Data</button>
        </div>
    </form>
</body>
</html>
<?php
require 'Model.php';

$id = $_GET['id'] ?? null;
$data = $id ? getBukuById($id) : [
    'judul_buku' => '',
    'penulis' => '',
    'penerbit' => '',
    'tahun_terbit' => ''
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($id) {
        updateBuku($id, $_POST['judul_buku'], $_POST['penulis'], $_POST['penerbit'], $_POST['tahun_terbit']);
    } else {
        insertBuku($_POST['judul_buku'], $_POST['penulis'], $_POST['penerbit'], $_POST['tahun_terbit']);
    }
    header('Location: Buku.php');
}
?>

<!DOCTYPE html>
<html>
<head>
    <title><?= $id ? 'Edit Buku' : 'Tambah Buku' ?></title>
    <style>
        body {
            background: #f0f2f5;
            font-family: 'Segoe UI', sans-serif;
        }
        .container {
            max-width: 500px;
            margin: 50px auto;
            background: white;
            padding: 30px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            border-radius: 12px;
        }
        h2 {
            text-align: center;
            margin-bottom: 25px;
            color: #2c3e50;
        }
        label {
            display: block;
            margin-top: 15px;
            color: #34495e;
        }
        input {
            width: 100%;
            padding: 8px 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 6px;
        }
        button {
            margin-top: 20px;
            width: 100%;
            background: #3498db;
            color: white;
            border: none;
            padding: 12px;
            font-size: 16px;
            border-radius: 6px;
            cursor: pointer;
        }
        button:hover {
            background: #2980b9;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2><?= $id ? 'Edit Data Buku' : 'Tambah Data Buku' ?></h2>
        <form method="post">
            <label>Judul Buku</label>
            <input type="text" name="judul_buku" required value="<?= htmlspecialchars($data['judul_buku']) ?>">

            <label>Penulis</label>
            <input type="text" name="penulis" required value="<?= htmlspecialchars($data['penulis']) ?>">

            <label>Penerbit</label>
            <input type="text" name="penerbit" value="<?= htmlspecialchars($data['penerbit']) ?>">

            <label>Tahun Terbit</label>
            <input type="number" name="tahun_terbit" value="<?= htmlspecialchars($data['tahun_terbit']) ?>">

            <button type="submit">Simpan</button>
        </form>
    </div>
</body>
</html>

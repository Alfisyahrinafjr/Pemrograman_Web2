<?php
require 'Model.php';

$id = $_GET['id'] ?? null;
$members = getAllMember();
$books = getAllBuku();
$data = $id ? getPeminjamanById($id) : [
    'id_member' => '',
    'id_buku' => '',
    'tgl_pinjam' => date('Y-m-d'),
    'tgl_kembali' => ''
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($id) {
        updatePeminjaman($id, $_POST['id_member'], $_POST['id_buku'], $_POST['tgl_pinjam'], $_POST['tgl_kembali']);
    } else {
        insertPeminjaman($_POST['id_member'], $_POST['id_buku'], $_POST['tgl_pinjam'], $_POST['tgl_kembali']);
    }
    header('Location: Peminjaman.php');
}
?>

<!DOCTYPE html>
<html>
<head>
    <title><?= $id ? 'Edit Peminjaman' : 'Tambah Peminjaman' ?></title>
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
        select, input {
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
        <h2><?= $id ? 'Edit Peminjaman' : 'Tambah Peminjaman' ?></h2>
        <form method="post">
            <label>Nama Member</label>
            <select name="id_member" required>
                <option value="">-- Pilih Member --</option>
                <?php foreach($members as $m): ?>
                    <option value="<?= $m['id_member'] ?>" <?= $data['id_member']==$m['id_member'] ? 'selected' : '' ?>>
                        <?= $m['nama_member'] ?>
                    </option>
                <?php endforeach; ?>
            </select>

            <label>Judul Buku</label>
            <select name="id_buku" required>
                <option value="">-- Pilih Buku --</option>
                <?php foreach($books as $b): ?>
                    <option value="<?= $b['id_buku'] ?>" <?= $data['id_buku']==$b['id_buku'] ? 'selected' : '' ?>>
                        <?= $b['judul_buku'] ?>
                    </option>
                <?php endforeach; ?>
            </select>

            <label>Tanggal Pinjam</label>
            <input type="date" name="tgl_pinjam" required value="<?= $data['tgl_pinjam'] ?>">

            <label>Tanggal Kembali</label>
            <input type="date" name="tgl_kembali" required value="<?= $data['tgl_kembali'] ?>">

            <button type="submit">Simpan</button>
        </form>
    </div>
</body>
</html>

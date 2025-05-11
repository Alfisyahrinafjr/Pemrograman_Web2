<?php
require 'Model.php';

$id = $_GET['id'] ?? null;
$data = $id ? getMemberById($id) : [
    'nama_member' => '',
    'nomor_member' => '',
    'alamat' => '',
    'tgl_mendaftar' => date('Y-m-d H:i:s'),
    'tgl_terakhir_bayar' => ''
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($id) {
        updateMember($id, $_POST['nama_member'], $_POST['nomor_member'], $_POST['alamat'], $data['tgl_mendaftar'], $_POST['tgl_terakhir_bayar']);
    } else {
        insertMember($_POST['nama_member'], $_POST['nomor_member'], $_POST['alamat'], $data['tgl_mendaftar'], $_POST['tgl_terakhir_bayar']);
    }
    header('Location: Member.php');
}
?>

<!DOCTYPE html>
<html>
<head>
    <title><?= $id ? 'Edit Member' : 'Tambah Member' ?></title>
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
        input, textarea {
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
        <h2><?= $id ? 'Edit Data Member' : 'Tambah Data Member' ?></h2>
        <form method="post">
            <label>Nama Member</label>
            <input type="text" name="nama_member" required value="<?= htmlspecialchars($data['nama_member']) ?>">

            <label>Nomor Member</label>
            <input type="text" name="nomor_member" required value="<?= htmlspecialchars($data['nomor_member']) ?>">

            <label>Alamat</label>
            <textarea name="alamat" required><?= htmlspecialchars($data['alamat']) ?></textarea>

            <label>Tanggal Daftar</label>
            <input type="text" name="tgl_mendaftar" readonly value="<?= $data['tgl_mendaftar'] ?>">

            <label>Tanggal Terakhir Bayar</label>
            <input type="date" name="tgl_terakhir_bayar" value="<?= $data['tgl_terakhir_bayar'] ?>">

            <button type="submit">Simpan</button>
        </form>
    </div>
</body>
</html>

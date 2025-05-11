<?php
require 'Model.php';

$peminjaman = getAllPeminjaman();

if (isset($_GET['delete'])) {
    deletePeminjaman($_GET['delete']);
    header('Location: Peminjaman.php');
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Peminjaman</title>
    <style>
        body {
            background-color: #ecf0f1;
            font-family: 'Segoe UI', sans-serif;
        }
        .container {
            width: 90%;
            margin: 40px auto;
        }
        h2 {
            text-align: center;
            color: #2c3e50;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 25px;
            background: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 0 8px rgba(0,0,0,0.1);
        }
        th, td {
            padding: 12px 15px;
            text-align: left;
        }
        th {
            background-color: #e67e22;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f4f6f7;
        }
        a.button {
            display: inline-block;
            padding: 8px 15px;
            background-color: #27ae60;
            color: white;
            text-decoration: none;
            border-radius: 6px;
            margin-bottom: 10px;
        }
        a.button:hover {
            background-color: #1e8449;
        }
        .actions a {
            margin-right: 10px;
            color: #e67e22;
            text-decoration: none;
        }
        .actions a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
<div class="container">
    <h2>Data Peminjaman Buku</h2>
    <a href="FormPeminjaman.php" class="button">+ Tambah Peminjaman</a>
    <table>
        <tr>
            <th>ID</th>
            <th>Nama Member</th>
            <th>Judul Buku</th>
            <th>Tanggal Pinjam</th>
            <th>Tanggal Kembali</th>
            <th>Aksi</th>
        </tr>
        <?php foreach ($peminjaman as $p): ?>
        <tr>
            <td><?= $p['id_peminjaman'] ?></td>
            <td><?= htmlspecialchars($p['nama_member']) ?></td>
            <td><?= htmlspecialchars($p['judul_buku']) ?></td>
            <td><?= $p['tgl_pinjam'] ?></td>
            <td><?= $p['tgl_kembali'] ?></td>
            <td class="actions">
                <a href="FormPeminjaman.php?id=<?= $p['id_peminjaman'] ?>">Edit</a>
                <a href="?delete=<?= $p['id_peminjaman'] ?>" onclick="return confirm('Hapus peminjaman ini?')">Hapus</a>
            </td>
        </tr>
        <?php endforeach ?>
    </table>
</div>

<a href="index.php" style="
    display: inline-block;
    padding: 10px 20px;
    margin-bottom: 20px;
    background-color: #27ae60;
    color: white;
    text-decoration: none;
    border-radius: 6px;
">← Kembali ke Dashboard</a>

</body>
</html>

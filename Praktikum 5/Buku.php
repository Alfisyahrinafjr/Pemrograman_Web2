<?php
require 'Model.php';

$books = getAllBuku();

if (isset($_GET['delete'])) {
    deleteBuku($_GET['delete']);
    header('Location: Buku.php');
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Buku</title>
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
            background-color: #8e44ad;
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
            color: #8e44ad;
            text-decoration: none;
        }
        .actions a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
<div class="container">
    <h2>Data Buku Perpustakaan</h2>
    <a href="FormBuku.php" class="button">+ Tambah Buku</a>
    <table>
        <tr>
            <th>ID</th>
            <th>Judul</th>
            <th>Penulis</th>
            <th>Penerbit</th>
            <th>Tahun</th>
            <th>Aksi</th>
        </tr>
        <?php foreach ($books as $b): ?>
        <tr>
            <td><?= $b['id_buku'] ?></td>
            <td><?= htmlspecialchars($b['judul_buku']) ?></td>
            <td><?= htmlspecialchars($b['penulis']) ?></td>
            <td><?= htmlspecialchars($b['penerbit']) ?></td>
            <td><?= $b['tahun_terbit'] ?></td>
            <td class="actions">
                <a href="FormBuku.php?id=<?= $b['id_buku'] ?>">Edit</a>
                <a href="?delete=<?= $b['id_buku'] ?>" onclick="return confirm('Hapus buku ini?')">Hapus</a>
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

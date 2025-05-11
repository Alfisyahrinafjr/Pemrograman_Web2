<?php
require 'Model.php';

$members = getAllMember();

if (isset($_GET['delete'])) {
    deleteMember($_GET['delete']);
    header('Location: Member.php');
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Member</title>
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
            background-color: #2980b9;
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
            color: #2980b9;
            text-decoration: none;
        }
        .actions a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
<div class="container">
    <h2>Data Member Perpustakaan</h2>
    <a href="FormMember.php" class="button">+ Tambah Member</a>
    <table>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Nomor</th>
            <th>Alamat</th>
            <th>Tanggal Daftar</th>
            <th>Tanggal Bayar</th>
            <th>Aksi</th>
        </tr>
        <?php foreach ($members as $m): ?>
        <tr>
            <td><?= $m['id_member'] ?></td>
            <td><?= htmlspecialchars($m['nama_member']) ?></td>
            <td><?= htmlspecialchars($m['nomor_member']) ?></td>
            <td><?= htmlspecialchars($m['alamat']) ?></td>
            <td><?= $m['tgl_mendaftar'] ?></td>
            <td><?= $m['tgl_terakhir_bayar'] ?></td>
            <td class="actions">
                <a href="FormMember.php?id=<?= $m['id_member'] ?>">Edit</a>
                <a href="?delete=<?= $m['id_member'] ?>" onclick="return confirm('Hapus member ini?')">Hapus</a>
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

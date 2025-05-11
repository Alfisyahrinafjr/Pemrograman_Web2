<?php
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard - Perpustakaan</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #ecf0f1;
            margin: 0;
        }
        header {
            background-color: #2c3e50;
            color: white;
            padding: 20px 40px;
            text-align: center;
        }
        .container {
            padding: 40px;
            max-width: 1000px;
            margin: auto;
        }
        h2 {
            color: #2c3e50;
        }
        .cards {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            margin-top: 30px;
        }
        .card {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            width: 280px;
            margin: 20px;
            padding: 30px;
            text-align: center;
            transition: 0.3s;
        }
        .card:hover {
            transform: translateY(-5px);
        }
        .card h3 {
            color: #16a085;
        }
        .card p {
            color: #7f8c8d;
            margin: 10px 0 20px;
        }
        .card a {
            text-decoration: none;
            color: white;
            background-color: #16a085;
            padding: 10px 20px;
            border-radius: 6px;
            display: inline-block;
        }
        .card a:hover {
            background-color: #138d75;
        }
        footer {
            text-align: center;
            padding: 20px;
            background: #2c3e50;
            color: white;
            margin-top: 40px;
        }
    </style>
</head>
<body>

<header>
    <h1>Selamat Datang di Sistem Perpustakaan</h1>
    <p>Dashboard Utama</p>
</header>

<div class="container">
    <h2>Menu Navigasi</h2>
    <div class="cards">
        <div class="card">
            <h3>Data Member</h3>
            <p>Kelola informasi anggota perpustakaan</p>
            <a href="Member.php">Lihat Data</a>
        </div>
        <div class="card">
            <h3>Data Buku</h3>
            <p>Kelola koleksi buku perpustakaan</p>
            <a href="Buku.php">Lihat Data</a>
        </div>
        <div class="card">
            <h3>Data Peminjaman</h3>
            <p>Kelola transaksi peminjaman buku</p>
            <a href="Peminjaman.php">Lihat Data</a>
        </div>
    </div>
</div>

<footer>
    &copy; <?= date('Y') ?> Sistem Perpustakaan. All rights reserved.
</footer>

</body>
</html>

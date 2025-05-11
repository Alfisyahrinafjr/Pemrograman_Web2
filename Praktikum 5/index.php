<!DOCTYPE html>
<html>
<head>
    <title>Beranda Perpustakaan</title>
    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(to right, #e0eafc, #cfdef3);
            color: #2c3e50;
        }

        header {
            background-color: #2c3e50;
            color: white;
            padding: 30px 20px;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0,0,0,0.2);
        }

        header h1 {
            margin: 0;
            font-size: 32px;
        }

        header p {
            font-size: 18px;
            margin-top: 10px;
            color: #bdc3c7;
        }

        .container {
            max-width: 1000px;
            margin: 50px auto;
            padding: 0 20px;
            text-align: center;
        }

        .menu {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 30px;
        }

        .card {
            width: 250px;
            height: 180px;
            border-radius: 12px;
            box-shadow: 0 6px 15px rgba(0,0,0,0.1);
            text-decoration: none;
            color: white;
            padding: 20px;
            transition: transform 0.3s, opacity 0.3s;
        }

        .card:hover {
            transform: translateY(-5px);
            opacity: 0.95;
        }

        .member {
            background-color: #2980b9;
        }

        .buku {
            background-color: #8e44ad;
        }

        .pinjam {
            background-color: #e67e22;
        }

        .card h3 {
            margin: 0 0 10px;
            font-size: 22px;
        }

        .card p {
            font-size: 14px;
        }

        footer {
            margin-top: 50px;
            text-align: center;
            color: #7f8c8d;
            font-size: 14px;
            padding-bottom: 20px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Sistem Informasi Perpustakaan</h1>
        <p>Kelola data anggota, buku, dan peminjaman dengan mudah</p>
    </header>

    <div class="container">
        <div class="menu">
            <a href="Member.php" class="card member">
                <h3>Data Member</h3>
                <p>Lihat dan kelola data anggota perpustakaan termasuk pendaftaran dan pembayaran.</p>
            </a>

            <a href="Buku.php" class="card buku">
                <h3>Data Buku</h3>
                <p>Kelola koleksi buku, penulis, penerbit, dan tahun terbit.</p>
            </a>

            <a href="Peminjaman.php" class="card pinjam">
                <h3>Data Peminjaman</h3>
                <p>Catat dan pantau transaksi peminjaman serta pengembalian buku.</p>
            </a>
        </div>
    </div>

    <footer>
        &copy; <?= date('Y') ?> Perpustakaan Digital | Sistem Informasi Kampus
    </footer>
</body>
</html>

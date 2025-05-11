<?php
$host = 'localhost';
$db   = 'perpustakaan'; 
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
    die("Koneksi gagal: " . $e->getMessage());
}

// FUNGSI UNTUK MEMBER

function getAllMember() {
    global $pdo;
    $stmt = $pdo->query("SELECT * FROM member");
    return $stmt->fetchAll();
}

function getMemberById($id) {
    global $pdo;
    $stmt = $pdo->prepare("SELECT * FROM member WHERE id_member = ?");
    $stmt->execute([$id]);
    return $stmt->fetch();
}

function insertMember($nama, $nomor, $alamat, $tgl_daftar, $tgl_bayar) {
    global $pdo;
    $stmt = $pdo->prepare("INSERT INTO member (nama_member, nomor_member, alamat, tgl_mendaftar, tgl_terakhir_bayar) VALUES (?, ?, ?, ?, ?)");
    $stmt->execute([$nama, $nomor, $alamat, $tgl_daftar, $tgl_bayar]);
}

function updateMember($id, $nama, $nomor, $alamat, $tgl_daftar, $tgl_bayar) {
    global $pdo;
    $stmt = $pdo->prepare("UPDATE member SET nama_member = ?, nomor_member = ?, alamat = ?, tgl_mendaftar = ?, tgl_terakhir_bayar = ? WHERE id_member = ?");
    $stmt->execute([$nama, $nomor, $alamat, $tgl_daftar, $tgl_bayar, $id]);
}

function deleteMember($id) {
    global $pdo;
    $stmt = $pdo->prepare("DELETE FROM member WHERE id_member = ?");
    $stmt->execute([$id]);
}

// FUNGSI UNTUK BUKU

function getAllBuku() {
    global $pdo;
    $stmt = $pdo->query("SELECT * FROM buku");
    return $stmt->fetchAll();
}

function getBukuById($id) {
    global $pdo;
    $stmt = $pdo->prepare("SELECT * FROM buku WHERE id_buku = ?");
    $stmt->execute([$id]);
    return $stmt->fetch();
}

function insertBuku($judul, $penulis, $penerbit, $tahun) {
    global $pdo;
    $stmt = $pdo->prepare("INSERT INTO buku (judul_buku, penulis, penerbit, tahun_terbit) VALUES (?, ?, ?, ?)");
    $stmt->execute([$judul, $penulis, $penerbit, $tahun]);
}

function updateBuku($id, $judul, $penulis, $penerbit, $tahun) {
    global $pdo;
    $stmt = $pdo->prepare("UPDATE buku SET judul_buku = ?, penulis = ?, penerbit = ?, tahun_terbit = ? WHERE id_buku = ?");
    $stmt->execute([$judul, $penulis, $penerbit, $tahun, $id]);
}

function deleteBuku($id) {
    global $pdo;
    $stmt = $pdo->prepare("DELETE FROM buku WHERE id_buku = ?");
    $stmt->execute([$id]);
}

// FUNGSI UNTUK PEMINJAMAN

function getAllPeminjaman() {
    global $pdo;
    $stmt = $pdo->query("
        SELECT 
            p.id_peminjaman,
            m.nama_member,
            b.judul_buku,
            p.tgl_pinjam,
            p.tgl_kembali
        FROM peminjaman p
        JOIN member m ON p.id_member = m.id_member
        JOIN buku b ON p.id_buku = b.id_buku
    ");
    return $stmt->fetchAll();
}

function getPeminjamanById($id) {
    global $pdo;
    $stmt = $pdo->prepare("SELECT * FROM peminjaman WHERE id_peminjaman = ?");
    $stmt->execute([$id]);
    return $stmt->fetch();
}

function insertPeminjaman($id_member, $id_buku, $tgl_pinjam, $tgl_kembali) {
    global $pdo;
    $stmt = $pdo->prepare("INSERT INTO peminjaman (id_member, id_buku, tgl_pinjam, tgl_kembali) VALUES (?, ?, ?, ?)");
    $stmt->execute([$id_member, $id_buku, $tgl_pinjam, $tgl_kembali]);
}

function updatePeminjaman($id, $id_member, $id_buku, $tgl_pinjam, $tgl_kembali) {
    global $pdo;
    $stmt = $pdo->prepare("UPDATE peminjaman SET id_member = ?, id_buku = ?, tgl_pinjam = ?, tgl_kembali = ? WHERE id_peminjaman = ?");
    $stmt->execute([$id_member, $id_buku, $tgl_pinjam, $tgl_kembali, $id]);
}

function deletePeminjaman($id) {
    global $pdo;
    $stmt = $pdo->prepare("DELETE FROM peminjaman WHERE id_peminjaman = ?");
    $stmt->execute([$id]);
}
?>

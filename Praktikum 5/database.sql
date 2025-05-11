CREATE DATABASE IF NOT EXISTS perpustakaan;
USE perpustakaan;

CREATE TABLE IF NOT EXISTS member (
    id_member INT AUTO_INCREMENT PRIMARY KEY,
    nama_member VARCHAR(250),
    nomor_member VARCHAR(15),
    alamat TEXT,
    tgl_mendaftar DATETIME,
    tgl_terakhir_bayar DATE
);

CREATE TABLE IF NOT EXISTS buku (
    id_buku INT AUTO_INCREMENT PRIMARY KEY,
    judul_buku VARCHAR(500),
    penulis VARCHAR(500),
    penerbit VARCHAR(250),
    tahun_terbit INT
);

CREATE TABLE IF NOT EXISTS peminjaman (
    id_peminjaman INT AUTO_INCREMENT PRIMARY KEY,
    id_member INT NOT NULL,
    id_buku INT NOT NULL,
    tgl_pinjam DATE,
    tgl_kembali DATE,
    FOREIGN KEY (id_member) REFERENCES member(id_member) ON DELETE CASCADE,
    FOREIGN KEY (id_buku) REFERENCES buku(id_buku) ON DELETE CASCADE
);

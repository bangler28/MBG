CREATE DATABASE mbg_sekolah;
USE mbg_sekolah;

CREATE TABLE sekolah (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama_sekolah VARCHAR(150) NOT NULL,
    jumlah_siswa INT NOT NULL,
    alamat TEXT NOT NULL,
    telepon VARCHAR(20) NOT NULL,
    kepala_sekolah VARCHAR(100) NOT NULL,
    status_sekolah VARCHAR(20) NOT NULL,
    tanggal_input TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

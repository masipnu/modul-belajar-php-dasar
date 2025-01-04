-- membuat database sekolah
CREATE DATABASE sekolah;

-- mengaktifkan database
USE sekolah;

-- membuat tabel
CREATE table siswa(
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100) NOT NULL,
    kelas INT(2) NOT NULL,
    jurusan VARCHAR(4) NOT NULL
);

-- menambah sample data
INSERT INTO siswa
(nama, kelas, jurusan) VALUES
("Dita Leni Ravia", 11, "PPLG" );
﻿# Aplikasi CRUD Mahasiswa

Aplikasi ini merupakan contoh sederhana sistem **CRUD (Create, Read, Update, Delete)** menggunakan **PHP dan MySQL**. Data mahasiswa disimpan dalam **database lokal** dengan tabel `mahasiswa`.

---

## 🧩 Fitur Aplikasi

- ✅ Menampilkan daftar mahasiswa
- ➕ Menambahkan data mahasiswa
- ✏️ Mengedit data mahasiswa
- ❌ Menghapus data mahasiswa
- 📊 Nomor urut dinamis berdasarkan jumlah data yang tampil (bukan ID database)

---

## 🛠️ Teknologi yang Digunakan

- PHP Native (tanpa framework)
- MySQL (localhost)
- HTML

---

## 🗄️ Struktur Database

Nama database: `dbMahasiswa`  
Tabel: `mahasiswa`

```sql
CREATE SCHEMA IF NOT EXISTS dbMahasiswa;
USE dbMahasiswa;

CREATE TABLE mahasiswa (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nim VARCHAR(100),
    nama VARCHAR(100),
    jurusan VARCHAR(100)
);

INSERT INTO mahasiswa (nim, nama, jurusan) VALUES
('2201001', 'Andi Wijaya', 'Teknik Informatika'),
('2201002', 'Budi Santoso', 'Sistem Informasi'),
('2201003', 'Citra Ayu', 'Teknik Komputer');

# SIAKAD — Sistem Informasi Akademik Sederhana

**Link Hosting:** https://taufikalhkim21.my.id

**Akun Login:**

ROLE : admin
username : admin22@gmail.com
password : admin22

ROLE : mahasiswa
username : 5520124089
password : mahasiswa

---

## Deskripsi Aplikasi

SIAKAD ini dibuat nge-manage data akademik kayak dosen, mahasiswa, mata kuliah, jadwal, sama KRS dalam satu aplikasi. Ada dua role pengguna, Admin yang bisa ngatur semua data, sama Mahasiswa yang bisa ngambil KRS dan lihat jadwal kuliah.

---

## Penjelasan Halaman

### Login
Halaman pertama yang muncul waktu buka aplikasi. Pengguna masukin email sama password, lalu sistem otomatis ngarahin ke dashboard sesuai role masing-masing — Admin ke halaman admin, Mahasiswa ke halaman mahasiswa.

### Dashboard
Halaman utama setelah login. Admin bisa lihat statistik keseluruhan data seperti jumlah dosen, mahasiswa, dan mata kuliah yang terdaftar. Mahasiswa bisa lihat ringkasan KRS yang lagi diambil di semester ini.

### Manajemen Dosen *(Admin)*
Halaman buat ngatur data dosen yang terdaftar di sistem. Admin bisa nambahin dosen baru, ngedit data yang udah ada, sampai hapus data dosen. Setiap dosen punya NIDN dan nama yang terelasi ke data jadwal perkuliahan.

### Manajemen Mahasiswa *(Admin)*
Halaman buat ngatur data mahasiswa. Admin bisa nambahin, ngedit, dan hapus data mahasiswa. Data mahasiswa ini terelasi langsung ke tabel users buat keperluan login dan KRS.

### Manajemen Mata Kuliah *(Admin)*
Halaman buat ngatur daftar mata kuliah yang tersedia. Admin bisa input kode mata kuliah, nama, sama jumlah SKS-nya. Data ini jadi acuan buat jadwal dan pengambilan KRS.

### Manajemen Jadwal *(Admin)*
Halaman buat ngatur jadwal perkuliahan. Admin bisa tentuin mata kuliah apa yang dijadwalkan, dosen pengajarnya siapa, di kelas mana, hari apa, dan jam berapa. Semua datanya saling terelasi lewat foreign key.

### KRS — Kartu Rencana Studi *(Admin & Mahasiswa)*
Halaman pengelolaan KRS. Admin bisa nambahin atau hapus KRS atas nama mahasiswa manapun. Mahasiswa sendiri bisa ngambil mata kuliah yang tersedia atau nge-drop yang udah diambil. Ada juga fitur export KRS ke PDF buat keperluan cetak atau arsip.

### Jadwal Kuliah *(Mahasiswa)*
Halaman buat mahasiswa lihat jadwal perkuliahan yang tersedia. Ditampilin lengkap mulai dari nama mata kuliah, dosen pengajar, kelas, hari, sampai jam kuliahnya.

---

## Screenshots

Tersedia di folder [`screenshots/`](./screenshots/)

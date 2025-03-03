# 🏥 Aplikasi Pendaftaran Pasien Rawat Jalan

Selamat datang di repository **Aplikasi Pendaftaran Pasien Rawat Jalan**. Proyek ini dikembangkan menggunakan **CodeIgniter 3** dengan sistem pendaftaran pasien rawat jalan secara digital untuk meningkatkan efisiensi layanan di rumah sakit.

---

## 🚀 Fitur Utama

✅ **Autentikasi Pegawai** - Login pegawai.

✅ **Manajemen Pasien** - CRUD data pasien (tambah, edit, hapus, lihat data pasien).

✅ **Pendaftaran Rawat Jalan** - Pasien dapat didaftarkan ke dokter dengan keluhan dan nomor antrian otomatis reset setiap hari.

✅ **Nomor Antrian Otomatis** - Nomor antrian pasien dimulai dari 1 setiap harinya.

✅ **Riwayat Rawat Jalan** - Menampilkan daftar kunjungan pasien sebelumnya beserta detail pemeriksaan.

✅ **Dashboard** - Statistik jumlah pasien, dokter, dan pendaftaran terbaru.

---

## 🛠️ Teknologi yang Digunakan

- **Framework**: CodeIgniter 3
- **Database**: MySQL
- **Frontend**: Bootstrap 5, jQuery
- **Autentikasi**: Session-based login
- **Hosting**: XAMPP / LAMP / WAMP (untuk development lokal)

---

## 📌 Instalasi dan Penggunaan

1️⃣ **Clone Repository**

```sh
git clone https://github.com/bersianturi/si-pasien.git
cd si-pasien
```

2️⃣ **Konfigurasi Database**

- Import file `test_rsu_sakina.sql` ke dalam MySQL
- Atur koneksi database di `application/config/database.php`

```php
$db['default'] = array(
    'dsn'   => '',
    'hostname' => 'localhost',
    'username' => 'root',
    'password' => '',
    'database' => 'test_rsu_sakina',
    'dbdriver' => 'mysqli',
);
```

3️⃣ **Jalankan Aplikasi**

- Pastikan server Apache & MySQL berjalan (gunakan XAMPP/WAMP)
- Akses melalui browser: `http://localhost/si-pasien`

4️⃣ **Kredensial Login**

Gunakan data berikut untuk login ke sistem:

| Email        | Password   |
| ------------ | ---------- |
| test@rsu.com | 1234567890 |

---

## 🎯 Struktur Folder

```
📂 application/
 ├── controllers/       # File controller utama
 ├── models/            # Model untuk database
 ├── views/             # Tampilan UI
 ├── config/            # Konfigurasi sistem
```

---

## 👨‍💻 Kontributor

💡 **Bernard Andrean Sianturi** - [LinkedIn](https://linkedin.com/in/bersianturi) | [GitHub](https://github.com/bersianturi)

🙌 Kontribusi terbuka! Silakan buat Pull Request atau buka Issue jika ada ide atau perbaikan.

---

## 📜 Lisensi

📄 **MIT License** - Silakan gunakan dan modifikasi sesuai kebutuhan!

---

⭐ **Jangan lupa untuk memberikan bintang di repository ini jika proyek ini bermanfaat!**

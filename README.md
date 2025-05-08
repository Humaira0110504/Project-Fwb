<p align="center"><strong>Sistem Informasi Penyewaan Baju Adat</strong></p>

<div align="center">

![logo_unsulbar](public/image.png)



<b>Meylani Humaira</b><br>
<b>D0222030</b><br>
<b>Framework Web Based</b><br>
<b>2025</b>
</div>

---


## 🚀 Fitur Utama Berdasarkan Role

### 🧑‍💼 Penyewa
- Registrasi dan login
- Melihat daftar toko penyewaan
- Melihat daftar baju adat per toko
- Melihat detail baju (ukuran, deskripsi, harga, stok, foto)
- Melakukan penyewaan baju adat
- Pembayaran via BRIVA dan cetak bukti penyewaan
- (Opsional) Riwayat sewa

### 🏪 Pemilik Toko
- Login pemilik
- Kelola profil toko
- CRUD data baju adat + upload gambar
- Melihat data penyewaan dan statusnya
- Melihat data pembayaran
- Menanggapi pesan dari penyewa

### 🛠️ Admin
- Login admin
- Dashboard monitoring (statistik pengguna, toko, transaksi, dll)
- Manajemen pengguna (lihat, blokir, dll)
- Manajemen toko & baju adat
- Monitoring sistem dan aktivitas

---
#### 1. `user` (penyewa & pemilik toko)

| Field         | Tipe Data         | Keterangan                            |
|---------------|-------------------|----------------------------------------|
| id            | INT (PK, AI)      | ID unik pengguna                      |
| name          | VARCHAR(100)      | Nama lengkap pengguna                 |
| email         | VARCHAR(100)      | Email pengguna                        |
| password      | VARCHAR(255)      | Password terenkripsi                  |
| phone         | VARCHAR(20)       | Nomor telepon                         |
| role          | ENUM              | 'penyewa' atau 'pemilik'              |
| created_at    | DATETIME          | Waktu registrasi                      |

---

#### 2. `admins`

| Field         | Tipe Data         | Keterangan                            |
|---------------|-------------------|----------------------------------------|
| id            | INT (PK, AI)      | ID admin                              |
| name          | VARCHAR(100)      | Nama admin                            |
| email         | VARCHAR(100)      | Email login                           |
| password      | VARCHAR(255)      | Password login                        |
| created_at    | DATETIME          | Tanggal dibuat                        |

---

#### 3. `toko` (toko penyewaan)

| Field         | Tipe Data         | Keterangan                            |
|---------------|-------------------|----------------------------------------|
| id            | INT (PK, AI)      | ID toko                               |
| user_id       | INT (FK ke user) | ID pemilik toko                       |
| nama_toko     | VARCHAR(100)      | Nama toko penyewaan                   |
| alamat        | TEXT              | Alamat lengkap toko                   |
| deskripsi     | TEXT              | Deskripsi toko                        |
| foto_toko     | VARCHAR(255)      | Path gambar toko                      |
| created_at    | DATETIME          | Tanggal dibuat                        |

---

#### 4. `baju_adat`

| Field         | Tipe Data         | Keterangan                            |
|---------------|-------------------|----------------------------------------|
| id            | INT (PK, AI)      | ID baju adat                          |
| toko_id       | INT (FK ke toko)  | ID toko pemilik baju adat             |
| nama_baju     | VARCHAR(100)      | Nama baju adat                        |
| ukuran        | VARCHAR(10)       | Ukuran baju (S, M, L, XL, dll)        |
| stok          | INT               | Jumlah stok tersedia                  |
| harga_sewa    | DECIMAL(10,2)     | Harga sewa per hari                   |
| deskripsi     | TEXT              | Deskripsi lengkap baju adat           |
| gambar        | VARCHAR(255)      | Path gambar                           |

---

#### 5. `penyewaan`

| Field         | Tipe Data         | Keterangan                            |
|---------------|-------------------|----------------------------------------|
| id            | INT (PK, AI)      | ID penyewaan                          |
| user_id       | INT (FK ke user) | ID penyewa                            |
| baju_id       | INT (FK ke baju_adat) | ID baju yang disewa               |
| tanggal_sewa  | DATE              | Tanggal mulai penyewaan               |
| lama_sewa     | INT               | Lama sewa dalam hari                  |
| total_bayar   | DECIMAL(10,2)     | Total biaya                           |
| status        | ENUM              | 'pending', 'dibayar', 'selesai'       |
| created_at    | DATETIME          | Waktu transaksi                       |

---

#### 6. `pembayaran`

| Field         | Tipe Data             | Keterangan                           |
|---------------|-----------------------|---------------------------------------|
| id            | INT (PK, AI)          | ID pembayaran                         |
| penyewaan_id  | INT (FK ke penyewaan) | Relasi ke transaksi penyewaan         |
| kode_briva    | VARCHAR(50)           | Kode pembayaran BRIVA                 |
| tanggal_bayar | DATETIME              | Tanggal pembayaran                    |
| status        | ENUM                  | 'belum bayar', 'sukses', 'gagal'      |
| bukti_cetak   | VARCHAR(255)          | Path ke bukti pembayaran (jika ada)   |

---

#### 7. `pesan`

| Field         | Tipe Data         | Keterangan                            |
|---------------|-------------------|----------------------------------------|
| id            | INT (PK, AI)      | ID pesan                              |
| dari_user_id  | INT (FK ke user) | ID pengirim                           |
| ke_pemilik_id | INT (FK ke user) | ID penerima (pemilik toko)           |
| isi_pesan     | TEXT              | Isi pesan                             |
| waktu_kirim   | DATETIME          | Waktu pengiriman                      |

| No | Relasi                                                 | Tipe Relasi     | Keterangan                                                                 |
|----|--------------------------------------------------------|------------------|------------------------------------------------------------------------------|
| 1  | `user.id` → `toko.user_id`                            | One to Many     | Satu user (pemilik) bisa punya banyak toko |
| 2  | `toko.id` → `baju_adat.toko_id`                        | One to Many     | Satu toko punya banyak baju adat                                            |
| 3  | `user.id` → `penyewaan.user_id`                       | One to Many     | Penyewa bisa melakukan banyak transaksi penyewaan                           |
| 4  | `baju_adat.id` → `penyewaan.baju_id`                   | One to Many     | Satu baju adat bisa disewa berkali-kali oleh banyak penyewa                 |
| 5  | `penyewaan.id` → `pembayaran.penyewaan_id`             | One to One      | Satu transaksi penyewaan punya satu data pembayaran                         |
| 6  | `user.id` → `pesan.dari_user_id`                      | One to Many     | Penyewa dapat mengirim banyak pesan ke pemilik                              |
| 7  | `user.id` → `pesan.ke_pemilik_id`                     | One to Many     | Pemilik toko bisa menerima banyak pesan                                     |

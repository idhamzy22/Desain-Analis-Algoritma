# Analisa Sistem

## **Deskripsi Masalah**
Pelanggan membutuhkan sistem pelayanan yang efektif untuk mengelola data pelanggan, transaksi, produk, alamat pelanggan, dan umpan balik (feedback). Masalah yang sering terjadi meliputi:
- Data pelanggan sulit dikelola dan ditemukan.
- Kesulitan dalam melacak transaksi pelanggan.
- Tidak ada sistem untuk mengelola umpan balik pelanggan dengan baik.
- Ketidakakuratan data stok produk.

---

## **Tujuan Sistem**
1. Mempermudah pengelolaan data pelanggan.
2. Mengotomatiskan pengelolaan transaksi.
3. Menyediakan sistem feedback untuk pelanggan.
4. Memastikan pengelolaan data produk yang akurat dan up-to-date.

---

## **Fungsi Utama Sistem**
1. **Pengelolaan Data Pelanggan**  
   - Menyimpan data pelanggan, termasuk nama, email, nomor telepon, alamat, dan tanggal bergabung.
2. **Pengelolaan Transaksi**  
   - Melacak transaksi pelanggan berdasarkan tanggal, jumlah, dan status.
3. **Manajemen Produk**  
   - Menyimpan data produk, termasuk nama, harga, stok, kategori, dan deskripsi.
4. **Pengelolaan Alamat Pelanggan**  
   - Mengelola alamat pelanggan tambahan seperti kota, provinsi, dan kode pos.
5. **Sistem Feedback**  
   - Menerima masukan pelanggan terkait produk atau layanan dengan sistem rating.

---

## **Entity-Relationship**
- **Entity:**
  - Pelanggan
  - Transaksi
  - Produk
  - Alamat Pelanggan
  - Feedback
- **Relasi:**
  - Pelanggan memiliki banyak transaksi.
  - Pelanggan memiliki banyak alamat.
  - Produk memiliki banyak transaksi.
  - Pelanggan memberikan feedback.

---

## **Fitur-Fitur Utama**
1. **CRUD Pelanggan:** Tambah, lihat, ubah, dan hapus data pelanggan.
2. **CRUD Produk:** Tambah, lihat, ubah, dan hapus data produk.
3. **Pengelolaan Transaksi:** Menambahkan, melihat, dan memperbarui status transaksi.
4. **Manajemen Feedback:** Menampilkan dan memperbarui status umpan balik pelanggan.
5. **Manajemen Alamat Pelanggan:** Mengelola alamat tambahan pelanggan.

---

## **Manfaat Sistem**
1. Mempercepat pengelolaan data pelanggan dan transaksi.
2. Meminimalkan kesalahan dalam manajemen stok produk.
3. Meningkatkan kepuasan pelanggan melalui pengelolaan umpan balik yang baik.
4. Meningkatkan efisiensi operasional.

---

## **Analisa Kebutuhan**
- **Fungsional:**
  - Sistem dapat menyimpan, mengubah, dan menampilkan data pelanggan, produk, transaksi, alamat pelanggan, dan feedback.
- **Non-Fungsional:**
  - Sistem harus responsif dan dapat diakses dengan waktu pemrosesan kurang dari 2 detik.
  - Data harus aman dan hanya dapat diakses oleh pengguna dengan otorisasi.


# Business Requirement Document (BRD)

## **Pendahuluan**
- **Judul Proyek:** Sistem Pengelolaan Data Pelayanan
- **Pemilik Proyek:** Divisi IT
- **Tujuan Proyek:** Membangun sistem yang dapat mengelola data pelanggan, transaksi, produk, alamat pelanggan, dan feedback dengan efisien.

---

## **Latar Belakang**
Saat ini pengelolaan data pelanggan, transaksi, dan produk dilakukan secara manual, yang menyebabkan kesalahan data dan inefisiensi. Dengan membangun sistem terintegrasi, perusahaan dapat meningkatkan efisiensi operasional dan kepuasan pelanggan.

---

## **Kebutuhan Bisnis**
1. Mempermudah pengelolaan data pelanggan dan transaksi.
2. Memastikan data produk selalu akurat dan up-to-date.
3. Menyediakan mekanisme feedback untuk meningkatkan layanan.
4. Mengurangi waktu yang dibutuhkan untuk memproses data pelanggan.

---

## **Tujuan**
1. Menyediakan sistem berbasis web untuk mengelola data pelanggan, transaksi, produk, alamat pelanggan, dan feedback.
2. Memastikan data pelanggan terorganisir dan dapat diakses dengan mudah.
3. Meningkatkan efisiensi melalui otomatisasi proses.

---

## **Fitur Utama**
1. **Manajemen Pelanggan:** 
   - Tambah, lihat, ubah, dan hapus data pelanggan.
2. **Manajemen Transaksi:**
   - Catatan transaksi berdasarkan pelanggan.
3. **Manajemen Produk:**
   - Informasi produk seperti stok, harga, dan kategori.
4. **Feedback Pelanggan:**
   - Sistem penerimaan feedback dengan rating.
5. **Manajemen Alamat Pelanggan:**
   - Mendukung alamat tambahan untuk setiap pelanggan.

---

## **Proses Utama**
1. **Registrasi Pelanggan:** Input data pelanggan seperti nama, email, dan alamat.
2. **Transaksi Pelanggan:** Membuat catatan transaksi pelanggan.
3. **Manajemen Produk:** Menambah atau memperbarui data stok produk.
4. **Feedback:** Pelanggan memberikan feedback setelah transaksi.

---

## **Pihak Terkait**
1. **Admin:** 
   - Mengelola data pelanggan, transaksi, dan produk.
2. **Pelanggan:**
   - Memberikan feedback terhadap layanan atau produk.

---

## **Batasan**
- Sistem hanya diakses oleh admin dan pelanggan yang terdaftar.
- Tidak mendukung integrasi dengan sistem pembayaran eksternal.

---

## **Risiko dan Solusi**
| **Risiko** | **Solusi** |
|------------|------------|
| Kesalahan data pelanggan | Validasi input data secara ketat |
| Sistem tidak responsif | Optimalkan performa database |
| Umpan balik negatif | Sistem eskalasi untuk penanganan cepat |

---

## **Dokumentasi Pendukung**
- Entity Relationship Diagram (ERD)
- Use Case Diagram
- Flowchart Proses

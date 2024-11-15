# **Analisis Sistem Data Pelanggan**

## **1. Deskripsi Sistem**
Sistem ini dirancang untuk mengelola data pelanggan, transaksi, dan produk. Sistem memiliki dua aktor utama, yaitu **Admin** dan **Pelanggan**, dengan hak akses berbeda. Tujuannya adalah untuk mempermudah pengelolaan data dan menyediakan akses riwayat transaksi kepada pelanggan.

---

## **2. Fitur Utama**
### **Untuk Admin**
- **Kelola Data Pelanggan**: Menambah, mengubah, dan menghapus data pelanggan.
- **Kelola Transaksi**: Mengatur transaksi yang dilakukan pelanggan.
- **Kelola Produk**: Menambahkan dan memperbarui informasi produk.

### **Untuk Pelanggan**
- **Melihat Riwayat Transaksi**: Akses daftar transaksi yang telah dilakukan.
- **Memberikan Feedback**: Memberikan masukan atau ulasan terkait layanan.

---

## **3. Alur Sistem**
1. **Login**: 
   - Admin dan pelanggan harus masuk ke sistem menggunakan kredensial mereka.
   - Jika login berhasil, mereka diarahkan ke dashboard sesuai peran.

2. **Pengelolaan Data (Admin)**:
   - Admin dapat menambah, mengubah, atau menghapus data pelanggan, transaksi, dan produk.

3. **Akses Riwayat (Pelanggan)**:
   - Pelanggan dapat melihat daftar transaksi yang pernah dilakukan.

4. **Feedback**:
   - Pelanggan dapat mengirimkan ulasan atau masukan yang relevan.

5. **Logout**:
   - Setelah selesai, admin dan pelanggan dapat keluar dari sistem.

---

## **4. Analisis Hak Akses**
- **Admin**: Memiliki akses penuh untuk mengelola semua data dalam sistem.
- **Pelanggan**: Hak akses terbatas untuk melihat data terkait mereka sendiri, seperti riwayat transaksi, dan memberikan feedback.

---

## **5. Diagram Pendukung**
### **Flowchart**
![Flowchart Alur Sistem](flowchart.png)

### **Use Case**
![Use Case Diagram](usecase.png)

---

## **6. Persyaratan Sistem**
### **Persyaratan Fungsional**
- Sistem harus memungkinkan admin untuk:
  - Menambah, mengubah, dan menghapus data pelanggan, transaksi, dan produk.
- Sistem harus memungkinkan pelanggan untuk:
  - Melihat riwayat transaksi mereka.
  - Memberikan feedback terhadap layanan.

### **Persyaratan Non-Fungsional**
- **Kegunaan**: Antarmuka yang sederhana dan mudah digunakan.
- **Keamanan**:
  - Login dengan kredensial yang valid.
  - Hanya admin yang dapat mengakses fitur manajemen data.
- **Kinerja**: Sistem harus dapat menangani setidaknya 1000 transaksi per hari tanpa penurunan performa.
- **Ketersediaan**: Sistem harus tersedia 24/7 dengan downtime minimal.

---

## **7. Kesimpulan**
Sistem data pelanggan ini memberikan solusi manajemen data yang efisien untuk admin dan akses informasi yang transparan untuk pelanggan. Dengan pengaturan hak akses yang jelas, sistem dapat memastikan keamanan dan kemudahan penggunaan bagi semua pihak.
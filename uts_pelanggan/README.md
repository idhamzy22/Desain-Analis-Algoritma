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


# **Dokumen Persyaratan Bisnis (BRD)**  

### **Proyek:** Sistem Data Pelanggan  
**Versi:** 1.0  
**Tanggal:** 15 November 2024  

---

## **1. Tujuan Proyek**  
Sistem ini bertujuan untuk mempermudah pengelolaan data pelanggan, transaksi, dan produk secara terintegrasi serta memberikan akses transparan kepada pelanggan terkait riwayat transaksi mereka.  

---

## **2. Fitur Utama**  

### **Untuk Admin**  
- **Kelola Data Pelanggan**: Admin dapat menambah, mengubah, atau menghapus data pelanggan.  
- **Kelola Transaksi**: Admin dapat mencatat dan mengelola data transaksi.  
- **Kelola Produk**: Admin dapat menambahkan atau memperbarui informasi produk yang ditawarkan.  

### **Untuk Pelanggan**  
- **Melihat Riwayat Transaksi**: Pelanggan dapat melihat daftar transaksi yang telah dilakukan.  
- **Memberikan Feedback**: Pelanggan dapat memberikan masukan terkait pengalaman mereka dengan layanan.  

---

## **3. Persyaratan Fungsional**  

### **Sistem Login**  
- Admin dan pelanggan harus dapat login menggunakan kredensial masing-masing.  
- Sistem harus membedakan akses berdasarkan peran (admin atau pelanggan).  

### **Pengelolaan Data**  
- **Admin**:  
  - Menambah, mengubah, dan menghapus data pelanggan, transaksi, dan produk.  
- **Pelanggan**:  
  - Melihat data terkait riwayat transaksi mereka.  
  - Memberikan feedback.  

---

## **4. Persyaratan Non-Fungsional**  
- **Kegunaan**:  
  - Antarmuka harus ramah pengguna dan mudah dipahami.  
- **Keamanan**:  
  - Sistem harus melindungi data pelanggan dengan enkripsi pada informasi sensitif.  
  - Hak akses harus dibatasi berdasarkan peran (admin dan pelanggan).  
- **Kinerja**:  
  - Sistem harus dapat memproses setidaknya 1000 transaksi per hari tanpa kendala performa.  
- **Ketersediaan**:  
  - Sistem harus tersedia 24/7 dengan waktu downtime minimal.  

---

## **5. Diagram Pendukung**  

### **Flowchart**  
Flowchart menggambarkan alur utama dalam sistem, mencakup proses login, pengelolaan data, dan logout.  

![Flowchart](flowchart.png)  

### **Use Case**  
Use case menggambarkan interaksi antara aktor (admin dan pelanggan) dengan sistem.  

![Use Case Diagram](usecase.png)  

---

## **6. Model dan Resource yang Dibutuhkan**  

### **Tabel Pelanggan**  
- **Kolom**:  
  - `id`: `bigint UNSIGNED` (Primary Key)  
  - `name`: `varchar(255)` - Nama pelanggan  
  - `email`: `varchar(255)` - Email pelanggan  
  - `phone`: `varchar(20)` - Nomor telepon  
  - `address`: `text` - Alamat pelanggan  
  - `created_at`: `timestamp` - Waktu data dibuat  
  - `updated_at`: `timestamp` - Waktu data diubah  

### **Tabel Transaksi**  
- **Kolom**:  
  - `id`: `bigint UNSIGNED` (Primary Key)  
  - `customer_id`: `bigint UNSIGNED` (Foreign Key ke tabel pelanggan)  
  - `product_id`: `bigint UNSIGNED` (Foreign Key ke tabel produk)  
  - `transaction_date`: `date` - Tanggal transaksi  
  - `amount`: `decimal(10,2)` - Jumlah transaksi  
  - `status`: `varchar(255)` - Status transaksi (contoh: selesai, pending)  
  - `created_at`: `timestamp` - Waktu data dibuat  
  - `updated_at`: `timestamp` - Waktu data diubah  

### **Tabel Produk**  
- **Kolom**:  
  - `id`: `bigint UNSIGNED` (Primary Key)  
  - `name`: `varchar(255)` - Nama produk  
  - `price`: `decimal(10,2)` - Harga produk  
  - `stock`: `int` - Jumlah stok produk tersedia  
  - `created_at`: `timestamp` - Waktu data dibuat  
  - `updated_at`: `timestamp` - Waktu data diubah  

---

## **7. Analisis Hak Akses**  

### **Hak Akses Admin**  
- Akses penuh untuk:  
  - Menambah, mengubah, dan menghapus data pelanggan, transaksi, dan produk.  

### **Hak Akses Pelanggan**  
- Hak akses terbatas untuk:  
  - Melihat riwayat transaksi.  
  - Memberikan feedback tanpa memengaruhi data utama.  

---

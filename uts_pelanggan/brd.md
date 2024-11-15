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

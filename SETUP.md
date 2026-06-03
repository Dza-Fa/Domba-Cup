# Domba Cup - Setup Guide

## Langkah 1: Import Database
1. Buka XAMPP, start **Apache** dan **MySQL**
2. Buka http://localhost/phpmyadmin
3. Buat database baru bernama `dombacu`
4. Import file `assets/db/dombacu.sql` (tab Import di phpMyAdmin)

## Langkah 2: Akses Website
- **Frontend**: http://localhost/Domba-Cup/
  - `index.html` - Beranda + form kontak
  - `registration.html` - Form pendaftaran tim
  - `ticket.html` - Pembelian tiket

- **Backend API**: http://localhost/Domba-Cup/api/
  - POST `/api/register.php` - Daftar tim
  - POST `/api/purchase.php` - Beli tiket
  - POST `/api/upload-proof.php` - Upload bukti bayar
  - POST `/api/contact.php` - Kirim pesan
  - POST `/api/verify.php` - Verifikasi admin

- **Admin Dashboard**: http://localhost/Domba-Cup/admin/
  - `index.php` - Ringkasan
  - `registrations.php` - Daftar tim (approve/reject)
  - `tickets.php` - Daftar tiket (approve/reject)

## Alur Pembayaran Tiket
1. User isi form pembelian → POST `/api/purchase.php` → dapat `ticket_id`
2. User upload bukti bayar → POST `/api/upload-proof.php` dengan `ticket_id` + file
3. Admin buka dashboard → Approve/Reject → status jadi `paid` atau `cancelled`

## Catatan
- Data disimpan di JSON di folder `data/` agar tanpa perlu setup database MySQL
- File upload bukti bayar disimpan di `uploads/` (max 5MB: jpg, png, pdf)
- Default DB credentials: host `localhost`, user `root`, pass `kosong`

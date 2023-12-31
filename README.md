<h1 align="center">Selamat datang di Ticket! 👋</h1>

## Apa itu Ticket?

Web Ticket yang dibuat oleh <a href="https://github.com/adhiariyadi"> Adhi Ariyadi </a>. **Ticket adalah Website untuk pemesanan ticket dengan mudah melalui website.**

## Fitur apa saja yang tersedia di Ticket?

-   Autentikasi Admin
-   User & CRUD
-   Rute & CRUD
-   Transportasi & CRUD
-   Category & CRUD
-   Pemesanan Ticket
-   Dan lain-lain

## Release Date

**Release date : 28 Apr 2020**

> Ticket merupakan project open source yang dibuat oleh Adhi Ariyadi. Kalian dapat download/fork/clone. Cukup beri stars di project ini agar memberiku semangat. Terima kasih!

---

## Default Account for testing

**Admin Default Account**

-   username: admin
-   Password: admin123

---

## Install

1. **Clone Repository**

```bash
git clone https://github.com/adhiariyadi/Ticket-Laravel.git
cd Ticket-Laravel
composer install
cp .env.example .env
```

2. **Buka `.env` lalu ubah baris berikut sesuai dengan databasemu yang ingin dipakai**

```bash
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=
```

3. **Instalasi website**

```bash
php artisan key:generate
php artisan migrate --seed
```

4. **Jalankan website**

```bash
php artisan serve
```
## Sistem Informasi Akuntansi Tiket
Sistem Informasi Akuntansi Tiket adalah platform yang dirancang khusus untuk mengelola transaksi keuangan terkait penjualan dan pembelian tiket. Dengan fitur manajemen pelanggan, sistem ini mencatat informasi pribadi pelanggan serta preferensi mereka, sementara pengelolaan tiket mencakup pencatatan penjualan tiket, harga, dan stok. Selain itu, sistem mencatat transaksi keuangan, seperti penerimaan pembayaran dan biaya operasional, yang kemudian digunakan untuk menghasilkan laporan keuangan. Dengan kemampuan manajemen persediaan tiket, pelaporan keuangan, dan integrasi dengan sistem lain, Sistem Informasi Akuntansi Tiket membantu perusahaan meningkatkan efisiensi operasional, keamanan data, dan pengambilan keputusan strategis berdasarkan analisis keuangan yang akurat.

## Tampilan Website
Tampilan Awal
![login](https://github.com/Risaly16/Ticket-Laravel/assets/152804564/0d53ef11-60b5-4aaf-89b8-75f290fa6d90)

Dashboard
![dashboard](https://github.com/Risaly16/Ticket-Laravel/assets/152804564/105454f9-a6bd-4592-b6ec-9dd9912a8613)

Transaksi
![Transaksi](https://github.com/Risaly16/Ticket-Laravel/assets/152804564/cbf045db-e37b-4b2a-8af3-037e6c74a6e3)

Rute
![Rute](https://github.com/Risaly16/Ticket-Laravel/assets/152804564/8c48d739-a65a-4884-858a-7c35fc1091bf)

Verifikasi Pembayaran
![verifikasi pembayaran](https://github.com/Risaly16/Ticket-Laravel/assets/152804564/5109a62e-b1ba-4f83-82bf-6329994ce971)

## Flowchart
Flowchart Awal Web
Rancangan flowchart awal web merupakan alur program ketika staf pertama kali menjalankan Sistem 
![flowchart login drawio](https://github.com/Risaly16/SistemInformasiAkuntansi_Tiket/assets/152804564/c6d5b825-1e71-4935-985a-4f3cfc6ec2b1)

Flowchart Sistem Informasi Akuntansi Tiket
Rancangan flowchart SIA merupakan alur program ketika sudah berhasil melakukan proses sign in
![Screenshot (11)](https://github.com/Risaly16/SistemInformasiAkuntansi_Tiket/assets/152804564/df9bd7c8-a659-4abc-95c4-57118ad7288f)

## Database
Structure Database
Hubungan database dalam Sistem Informasi Akuntansi Tiket sangat krusial untuk memastikan efisiensi, integritas, dan keterjangkauan data. Basis data menyimpan informasi terkait pelanggan, transaksi penjualan tiket, dan data keuangan. Tabel pelanggan mencatat detail pelanggan seperti nama, kontak, dan riwayat transaksi. Tabel tiket menyimpan informasi mengenai jenis tiket, harga, dan stok yang tersedia. Transaksi keuangan direkam dalam tabel terpisah, mencakup pembayaran dari pelanggan dan biaya operasional. Hubungan antara tabel-tabel ini dibangun melalui kunci asing dan kunci utama, memastikan integritas referensial. Sebagai contoh, users (kunci utama) dalam tabel pelanggan terhubung dengan pemesanan (kunci asing) dalam tabel transaksi keuangan. Integrasi ini memungkinkan sistem dengan cepat mengekstrak dan menganalisis data untuk melacak penjualan, mengelola persediaan tiket, serta menghasilkan laporan keuangan secara efisien. Dengan basis data yang terstruktur dengan baik, Sistem Informasi Akuntansi Tiket dapat memberikan informasi yang akurat dan real-time, mendukung pengambilan keputusan yang lebih baik dalam menjalankan operasi bisnis.
![phpmyadmin](https://github.com/Risaly16/Ticket-Laravel/assets/152804564/02544e65-8252-4704-a52b-76c481de6586)

Designer phpMyAdmin
Rancangan tabel yang dibuat didalam database merupakan implementasi dari desain entity relational diagram. Terdapat 6 entitas yang menjadi tabel pada database SIA. Berikut merupakan rancangan tabel yang sudah dibuat pada database SIA dapat dilihat pada gambar dibawah ini
![erd](https://github.com/Risaly16/Ticket-Laravel/assets/152804564/826f981c-3cdc-4da6-aab4-0bdb8d3dd2bb)


## Author

-   Facebook : <a href="https://web.facebook.com/adhiariyadi.me/"> Adhi Ariyadi</a>
-   LinkedIn : <a href="https://www.linkedin.com/in/adhiariyadi/"> Adhi Ariyadi</a>

## Contributing

Contributions, issues and feature requests di persilahkan.
Jangan ragu untuk memeriksa halaman masalah jika Anda ingin berkontribusi. **Berhubung Project ini saya sudah selesaikan sendiri, namun banyak fitur yang kalian dapat tambahkan silahkan berkontribusi yaa!**

## License

-   Copyright © 2020 Adhi Ariyadi.
-   **Ticket is open-sourced software licensed under the MIT license.**

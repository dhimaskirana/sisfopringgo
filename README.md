# Sisfo Pringgo App 2018

## Deskripsi aplikasi

Sisfo Pringgo App merupakan aplikasi sistem pendataan umat di Gereja Katolik Santo Paulus Pringgolayan Yogyakarta yang dikembangkan secara pribadi oleh Dhimas Kirana (Tim Kerja Pendataan Umat)

## Tujuan aplikasi ini dikembangkan

Sejak tahun 2011, setiap paroki di bawah naungan Keuskupan Agung Semarang menggunakan aplikasi SIUK (Sistem Informasi Umat Keuskupan) berbasis FoxPro untuk mendata umat di paroki.

Sistem pendataan di aplikasi SIUK ini masih menggunakan metode manual yaitu mengumpulkan data dari umat kemudian melakukan update data di aplikasi, kemudian file data umat berupa file .dbf dikirim ke Keuskupan Agung Semarang untuk dilaporkan.

Kemudian pada tahun 2018, Dhimas Kirana yang menjabat sebagai anggota Tim Pendataan Umat Paroki Santo Paulus Pringgolayan mencoba mengembangkan aplikasi Sisfo Pringgo App ini dengan tujuan digitalisasi data umat dan menjadi aplikasi berbasis web.

Aplikasi ini berbasis Codeigniter versi 3 dan mulai dikembangkan pada akhir tahun 2018. Kelebihan menggunakan aplikasi ini adalah berbasis web, sehingga bisa diakses dari mana pun bahkan dari smartphone pun bisa. Selain itu karena berbasis online, sehingga data bisa dipantau secara realtime dan selalu up to date.

## Pengembangan selanjutnya

Aplikasi ini berhenti dikembangkan sejak akhir 2019 sejak Keuskupan Agung Semarang juga mengeluarkan aplikasi pendataan umat bernama ECCLESIA. Sehingga seluruh paroki di bawah naungan Keuskupan Agung Semarang menggunakan aplikasi ECCLESIA ini. Tujuannya supaya data umat antar paroki saling terintegrasi.

## Penutup

Aplikasi ini di upload ke github dan saya simpan sebagai arsip aplikasi hasil pengembangan saya. Jika anda tertarik dengan aplikasi ini bisa menghubungi saya. Terima kasih.

## Instalasi

1. Download aplikasi ini
2. Copy source ke folder htdocs atau folder www di web server yang anda gunakan
3. Jalankan `composer install` di folder source aplikasi
4. Buat database
5. Import file `sisfopringgo.sql` ke database yang telah anda buat
6. Edit konfigurasi database di `/application/config/database.php`
7. Selesai.
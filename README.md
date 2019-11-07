English guide not yet available


Ebooks adalah aplikasi berbasis web dimana kamu mungkin untuk menulis satu tema dan membaginya dalam beberapa part agar lebih mudah untuk dibaca. Pada dasarnya ebooks adalah blog pada umumnya tetapi mungkin kelebihan ebooks adalah lebih rapi dan juga lebih simple.

CARA PEMASANGAN
1- download script ini dengan klik clone or download. atau kamu bisa mencari artikel di pencarian tentang cara download di github.

2- kemudian instal apache, php, dan mysql. Atau kamu bisa download xampp atau aplikasi sejenis. atau jika kamu pakek hp maka kamu bisa download aplikasi i-code go atau aplikasi sejenis.

3- langkah selanjutnya, kamu harus mengestrak script yang tadi kamj download di langkah pertama dan pindahkan ke opt/lampp/htdocs jika kamu menggunakan apache. jika kamu menggunakan i-code go kamu harus pindahkan ke icode-go/data_files/www/. kemudian nyalakan apachenya.

4- selanjutnya adalah pengaturan web:
4.1- buat sebuah database. lalu kemudian import file ebooks.sql
4.2- menuju file application/config/database.php lalu ubah host, user, password ,dan database anda sesuai punya anda.
4.3- menuju file application/config/config.php lalu ubah base_url seperti base_url anda. misal 'http://localhost:8080' adalah halaman root dari icode-go. lalu 'http://localhost:8080/ebooks' adalah base_url saya, dimana ebooks adalah nama folder yang saya pindahkan seperti proses ke 3.

5- seharusnya program sudah bisa berjalan namun jika belum jalan maka cari sendiri solusinya atau bisa whatsapp saya di +6285851470051
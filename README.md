# HMAC
UTS HMAC


Nama : Muchammad Ircham Lukman Diansyah

NIM  : 1814321001

Create Hmac 
Buka terminal powershell pada visual studioCode 
1.	php input.php texs.txt dan key abcdefgh
  - input.php yaitu sebagai file program yang akan di jalankan 
  -	texs.txt adalah objek yang akan di enkrip menggunakan hmac
  - Abcdefg  adalah key nya 
 
 
2.	Lihat Hasil MAC yang telah dibuat

Verifikasi Hmac 
	- php verif.php (file program)
    - text.txt      (objek file yang di enkrip)
    - 12345          (key yang di gunakan sama atau sudah tervertifikasi)
    - 22ee5ef2b3233ae192cc11afdd94c6d9ba4bb0ed  (hasil yang sudah di vertifikasi)
 
Jika semuanya benar maka program akan mengeluarkan “file tertentivikasi” menandakan MAC dan key benar benar sama

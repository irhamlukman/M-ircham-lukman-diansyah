# HMAC
UTS HMAC


Nama : Muchammad Ircham Lukman Diansyah

NIM  : 1814321001

Create Hmac 
Buka terminal powershell pada visual studioCode (dahal hal ini mengggunakan VScode)
1.	php create.php UTS.pdf abcdefgh
•	create.php : berlaku sebagai program yang akan di jalankan 
•	UTS.pdf : adalah objek yang akan di enkrip menggunakan hmac
•	Abcdefg : adalah key nya 
2.	Lihat Hasil MAC yang telah dibuat

Verifikasi Hmac 
Buka terminal powershell pada visual studioCode (dahal hal ini mengggunakan VScode)
1.	php create.php UTS.pdf abcdefgh fac58c0ff9004e2fb7dc052a92d5937ec904426c
•	create.php : berlaku sebagai program yang akan di jalankan 
•	UTS.pdf : adalah objek yang akan di enkrip menggunakan hmac
•	Abcdefg : adalah key nya 
•	fac58c0ff9004e2fb7dc052a92d5937ec904426c : hasil mac yang sudah  digunakan sebagai verifikasi 
2.	Jika semuanya benar maka program akan mengeluarkan “File Tertentivikasi” menandakan MAC dan key benar benar sama

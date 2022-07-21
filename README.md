# Project00 - Persiapan Kelas

## Garis Besar

✅ Perkenalan <br>
✅ Spesifikasi laptop <br>
✅ Koneksi internet <br>
✅ Google Classroom <br>
✅ Google Calendar <br>
✅ GitHub <br>
✅ Git <br>
✅ Xampp (Apache, MySQL, PHPMyAdmin) <br>
✅ Text Editor <br>
✅ Web Browser <br>
✅ Discord <br>

## Catatan

### Perintah Git

Perintah untuk melihat versi git
```
git --version
```

Perintah untuk mengupdate versi git di Windows
```
git update-git-for-windows
```

perintah untuk cek status git
```
git status
```

### Membuat Koneksi Database

Skrip PHP & MySQL untuk membuat koneksi ke database

```php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "phpii_project00_janzen"

$connection = mysqli_connect($hostname, $username, $password, $database);

if($connection->connect_error){
	echo "Koneksi gagal!";
} else {
	echo "Koneksi berhasil!";
}
```
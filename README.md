
## Cara Install & Configuration

### Clone Project

git clone https://github.com/duakelincii/overtime-calculate.git

### Install Semua Dependensi yang Dibutuhkan

```bash
composer update
```

### Buat Database Baru

Buat database sebagai tempat penyimpanan aplikasi ini

### Copy .env.example to .env

Copy file .env.example ke .env

```bash
cp .env.example .env
```

### Setting Database di File .env

```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nama_database
DB_USERNAME=username
DB_PASSWORD=password
```

### Migrasi Database

Migrasi semua table dan data yang sudah disediakan

```bash
php artisan migrate:fresh --seed
```

### Generate Key Aplikasi

```bash
php artisan key:generate
```

### Generate Swagger Documentation

```bash
php artisan l5-swagger:generate
```

### Jalankan Aplikasi

```bash
php artisan serve
```

## Dokumentasi API 

### Mengakses Dokumentasi API

Untuk melihat dokumentasi API pastikan aplikasi sudah berjalan atau jika belum maka jalankan aplikasi terlebih dahulu menggunakan perintah dibawah

```bash
php artisan serve
```

Untuk mengkses dokumentasi silakan salin URL berikut ke browser anda

```bash
http://127.0.0.1:8000/api/documentation
```

## Dokumentasi Testing

### Menjalankan Testing

Testing pada project ini menggunakan PHP Unit, untuk menjalankan testing salin perintah berikut ke terminal anda

```bash
php artisan test
```

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

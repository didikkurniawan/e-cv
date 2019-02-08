Sebelum menjalankan fungsi harap lakukan perintah sebagai berikut.
1. Download CI-Beam ke direktori tujuan.
2. Pindah ke direktori CI-Beam.
3. Jalankan `composer install`.
4. Pindah ke direktori `assets`.
5. Jalankan `bower update`.

Setelah langkah diatas selesai maka kita akan melakukan konfigurasi DB, Tamplate, dll.
1. Konfigurasi Database
    a. Buka folder config->database.php
    b. Kemudian isi array dengan key_name yang sesuai
        'hostname' => 'alamat IP seperti localhost atau 192.125.124.1',
        'username' => 'username',
        'password' => 'password',
        'database' => 'nama database',
        'dbdriver' => 'jenis database contohnya mysqli'
2. Konfigurasi Base_Url
    a. Buka folder congif->config.php
    b. Kemudian ubah array $config['base_url'] = 'http://localhost/halal-local'; | url tersebut merupakan 
       url yang dipanggil saat pertama website dibuka.
3. Konfigurasi penggunaan Library
    a. Buka folder config->autoload.php
    b. Kemudian ubah array $autoload['libraries'] = 'isi diambil dari librari yang terdapat pada folder
       application->libraries->nama library'.
4. Konfigurasi Navigation untuk menu admin
    a. Buka folder config->navigation.php
    b. Pada file tersebut navigation dibentuk dari array yang memanggil file inti layout yang ada pada 
       folder application->views->layout->admin.php
5. Konfigurasi Tamplates 
    a. Buka folder config->tamplates.php
    b. pada file tersebut digunakan untuk mengatur layout default, title application,dll.
    
Untuk memahami struktur aplikasi, berikut cara memahaminya:
1. Buka application->config->routes.php
2. routes.php digunakan untuk mengatur url yang akan dipanggil.
3. untuk menjelaskan fungsi-fungsinya dapat dilihat langsung pada file.php


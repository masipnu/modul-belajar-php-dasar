# Belajar PHP Dasar

## Mengenal PHP

### Pengertian dan Aplikasi yang Diperlukan

- PHP merupakan singkatan dari *PHP Hypertext Preprocessor*, yaitu bahasa pemrograman web yang dapat disisipkan dalam skrip HTML dan bekerja di sisi server.
- Tujuannya adalah untuk membantu para *developer* dalam membuat web dinamis dengan cepat.
- Agar dapat menjalankan PHP, kita perlu menyediakan perangkat lunak berikut:
  - **Web Server** (Apache, IIS, Nginx),
  - **PHP Server**,
  - **Database Server** (MySQL, MariaDB, MongoDB, dsb)
- Aplikasi di atas tidak perlu diinstall satu per satu, karena biasanya telah tersedia paket aplikasi yang sudah mencakup semuanya, seperti **XAMPP**, **Laragon**, **AppServ**, **USBWebserver**, **Uwamp**, dsb.
- Jika menggunakan XAMPP, maka skrip PHP ditulis di dalam folder **htdocs**, namun jika menggunakan Appserv ataupun laragon, maka skrip PHP disimpan di dalam folder **www**.

### Fungsi PHP

Fungsi PHP dalam pemrograman web di antaranya sebagai berikut:
- Menghasilkan halaman dinamis pada website.
- Membuat, membuka, menulis, membaca, menghapus dan menutup file pada server.
- Memproses data yang dikirim dari form.
- Mengirim dan mengakses cookie.
- Modifikasi data pada database.
- Mengontrol akses user.
- Mengenkripsi data.

### Penulisan Sintaks PHP

- Skrip PHP dituliskan di antara tanda pembuka `<?php` dan penutup `?>`.
- Satu file PHP dapat berisi full skrip PHP atau dapat disisipkan di antara skrip lain seperti HTML, CSS maupun Javascript.
- File yang berisi skrip PHP wajib disimpan dengan ekstensi **.php**.
- Jika disimpan dengan ekstensi HTML ataupun di sembarang tempat, maka skrip PHP tidak akan diakses sebagaimana mestinya.
- Setiap baris skrip PHP harus diakhiri dengan tanda *semicolon* `;`, jika tidak, maka akan menampilkan pesan *error*

Contoh penulisan skrip PHP
```php
<?php
echo "Halo Kamu";
?>
```

### Menjalankan File PHP

Menjalankan skrip PHP tidak sama seperti membuka file HTML yang tinggal didobel klik terbuka begitu saja. Setidaknya ada 3 cara yang bisa dilakukan untuk menjalankan skrip PHP.

1. **Dengan Command Prompt**
   
   Yaitu dengan memanggil file php dari aplikasi terminal ataupun command prompt. Contohnya, jika saya punya file `halo.php` saya bisa mengetikkan `php halo.php` pada command promt, maka skrip akan dijalankan dan hasilnya langsung muncul di command promt. Ini cocok jika digunakan untuk sekedar belajar ataupun membuat aplikasi php berbasis comamnd line.

2. **Dengan Web Server**
   
   Yaitu dengan menginstall paket aplikasi XAMPP, Laragon, Appserv atau yang lainnya, lalu menyimpan file php pada direktori servernya, semisal pada folder **htdocs** ataupun **www**.

3. **Dengan PHP Server**
   
   Ini adalah opsi yang ringan, alih-alih menginstall aplikasi XAMPP dan semacamnya yang ukurannya besar, kita cukup memanfaatkan file binary PHP. karena PHP sendiri sebenarnya bisa menjalankan web server.
   
   Ini cocok dilakukan jika kita ingin menampilkan pemrosesan skrip PHP pada web browser namun belum berhubungan dengan databse.

   Namun jika suatu saat kita harus melakukan manipulasi database, kita perlu menginstall aplikasi database server semacam MariaDB ataupun MySQL secara terpisah.

   Cara menjalankan PHP Web Server adalah dengan membuka *command prompt*, lalu ketikkan perintah

   ```cmd
   php -S localhost:80
   ```

   atau semisal saya menyimpan file skrip php di dalam folder `web` maka perintahnya adalah

   ```cmd
   php -S localhost:80 -t web
   ```

### Skrip HTML dan PHP

- Untuk menampilkan skrip HTML ke browser, kita bisa menggunakan perintah `print` atau `echo`, namun yang lebih sering digunakan adalah `echo`
- Perintah `echo` bisa ditulis tanpa kurung, atau dengan kurung seperti ini `echo()`
- Teks yang ingin ditampilkan, baik berupa skrip HTML maupun teks biasa harus diapit dengan tanda *single-quote* `'` ataupun *double-qoute* `"`.

!!! warning Perhatian
    - Jangan menuliskan petik ganda `"` di dalam teks, jika menggunakan perintah `echo` atau `print` dengan petik ganda, begitu juga dengan petik tunggak `'`.
    - Jika terpaksa harus menuliskan petik, maka berikan tanda *back slash* `\` sebagai *escape-character* sebelum tanda petik.
    - Segabai tanda petik ganda, dapat menggunakan petik tunggal `'`, jika menggunakan `echo` atau `print` dengan petik ganda, begitu juga sebaliknya.

Mari kita buat contoh skrip dengan perintah `echo`

```php
<?php
echo "<h2>PHP itu mudah</h2>";
echo ("Saya senang belajar \"PHP\" <br>");

print 'Jika saya terus belajar,';
print ('saya pasti bisa menguasai "PHP"');
?>
```

### Komentar

- Kita akan biasa menuliskan keterangan sebagai penanda skrip php kita, hal ini bisa dilakukan dengan menambahkan baris komentar.
- Jika komentar terdiri dari 1 baris, komentar bisa diawali dengan tanda `//` atau `#`
- Jika komentar terdiri lebih dari satu baris, maka diawali dengan tanda `/*` dan diakhiri dengan tanda `*/`.
- Pada kebanyakan *code editor*, *shortcut* untuk membuat komentar adalah tombol <kbd>CTRL</kbd>+<kbd>/</kbd>.

Contoh membuat komentar

```php
<?php
# ini adalah komentar

// ini juga komentar

/*
* ini juga komentar
* tapi lebih dari satu baris
*/
?>
```

## Dasar-dasar PHP

### Variabel

- Variabel digunakan untuk menyimpan data berupa teks, angka dan sebagainya yang nilainya dapat diubah-ubah.
- Nama variabel bisa apa saja asal mengikuti aturan berikut:
  - Nama variabel hanya boleh mengandung huruf, angka dan *underscore*.
  - Nama variabel yang terdiri lebih dari satu kata dapat dipisahkan dengan *underscore*.
  - Nama variabel tidak boleh menggunakan kata yang merupakan bagian dari skrip PHP.
  - Penulisan nama variabel harus diawali dengan tanda dolar `$`.
  - Variabel bersifat *case-sensitive*, sehingga huruf besar dan huruf kecil dibedakan.

Contoh membuat variabel. Ketikkan kode berikut dan jalankan atau buka di dalam browser.

```php
<?php
$kata = "Semangat pagi kawan..!";
echo $kata;
?>
```

### Tipe Data

Variabel pada PHP dapat menyimpan berbagai macam tipe data, di antaranya:

- **String**, yaitu teks. Contoh: "Selamat Pagi" atau "123"
- **Integer**, yaitu angka non-desimal. Contoh: 1, 100, -400
- **Float**, yaitu tipe data angka desimal. Contoh: 23.5
- **Boolean**, tipe data yang hanya bernilai `true` atau `false` saja
- **Array**, yaitu tipe data yang menyimpan banyak nilai dalam satu variabel
- **Object**, yaitu tipe data yang menyimpan data beserta informasi bagaimana data diproses
- **Null**, yaitu tipe data yang hanya bernilai `NULL`

Contoh:
```php
<?php
$nama = "Joko";
$umur = 17;

var_dump($nama);
var_dump($umur);
?>
```

### Konstanta

- Konstanta digunakan untuk menyimpan nilai sederhana.
- Sekali didefinisikan/ dibuat, nilai konstanta tidak dapat dirubah, jika dirubah/ diisi ulang maka akan error.
- Penulisan nama konstanta sama dengan variabel, namun tidak menggunakan tanda `$`.
- *Best Practice* penulisan nama konstanta adalah dengan huruf kapital.

Contoh membuat konstanta

```php
<?php
define("APP","Aplikasi Siswa");
define("VERSION","1.0");

echo APP . " Versi " . VERSION;
?>
```

### Operator

- Setiap bahasa pemrograman pasti memiliki operator.
- Operator digunakan untuk melakukan operasi terhadap satu atau lebih data, atau variabel, sehingga menghasilkan data baru

#### Operator Aritmatika

Operator aritmatika merupakan operator untuk melakukan perhitungan aritmatika.

|Operator|Fungsi|
|:-:|-|
|+|Penjumlahan|
|-|Pengurangan|
|*|Perkalian|
|/|Pembagian|
|%|Modulus/ Sisa hasil bagi|

Contoh

```php
<?php
$x = 5;
$y = 2;

echo "$x + $y = " . $x + $y . "<br>";
echo "$x - $y = " . $x - $y . "<br>";
echo "$x * $y = " . $x * $y . "<br>";
echo "$x / $y = " . $x / $y . "<br>";
echo "$x % $y = " . $x % $y . "<br>";
?>
```

#### Operator Perbandingan

Digunakan untuk membandingkan 2 nilai atau variabel, hasilnya adalah **true** atau **false**.

|Operator|Arti|
|-|-|
|==|Sama dengan|
|===|Identik-sama dengan|
|!= atau <>|Tidak sama dengan|
|!==|Tidak identik|
|>|Lebih besar|
|<|Lebih kecil|
|<= |Lebih kecil atau sama dengan|
|>=|Lebih besar atau sama dengan|

Contoh:

```php
<?php
$x = "5";
$y = 5;

var_dump($x == $y);
var_dump($x === $y);
var_dump($x != $y);
var_dump($x !== $y);
var_dump($x > $y);
var_dump($x < $y);
var_dump($x >= $y);
var_dump($x <= $y);
?>
```

#### Operator Logika

Operator logika digunakan untuk menggabungkan dua pernyataan atau lebih, hasilnya **true** atau **false**.

|Operator|Arti|
|-|-|
|`and` atau `&&`|Benar jika kedua pernyataan benar|
|`or` atau `\|\|` |Benar jika salah satu atau keduanya bernilai benar|
|`xor`|Benar jika salah satu pernyataan bernilai benar, tetapi tidak keduanya|
|`!`|Benar jika pernyataanya salah|

#### Operator Increment dan Decrement

Operator ini digunakan untuk menambahkan atau mengurangi nilai variabel.

|Operator|Nama|Keterangan|
|:-:|:-:|-|
|++$x|Pre-increment|Menambahkan variabel \$x dengan 1, lalu mengembalikan nilai $x|
|$x++|Post-increment|Mengembalikan variabel \$x, kemudian menambahkan nilai $x dengan 1|
|--$x|Pre-decrement|Mengurangi variabel \$x dengan 1, lalu mengembalikan nilai $x|
|$x--|Post-decrement|Mengembalikan variabel \$x, kemudian mengurangi dengan 1|

#### Operator Assigment

Operator ini digunakan untuk menentukan atau mengubah nilai suatu variabel numerik.

|Assigment|Sama dengan|Keterangan|
|-|-|-|
|\$x = $y|\$x = $y|Nilai x sama dengan nilai y|
|\$x += $y|\$x = \$x + $y|Nilai x ditambahkan dengan nilai y|
|\$x -= $y|\$x = \$x - $y|Nilai x dikurangi dengan nilai y|
|\$x *= $y|\$x = \$x * $y|Nilai x dikalikan dengan nilai y|
|\$x /= $y|\$x = \$x / $y|Nilai x dibagi dengan nilai y|
|\$x %= $y|\$x = \$x % $y|Nilai x modulus dengan nilai y|

#### Operator String

Operator ini digunakan untuk menggabungkan tipe data string.

|Operator|Contoh|
|:-:|-|
|`.`|`$kata = "Saya sedang"."belajar PHP";`|
|`.=`|`$kata .= "dengan Semangat";`|

#### Operator Kondisi

- Operator ini digunakan untuk memberikan nilai pada suatu variabel sesuai kondisi yang ditentukan.
- Jika kondisi **true** maka akan diberi nilai dengan nilai sebelah kiri tanda `:`
- Jika kondisi **false** maka akan diberi nilai dengan nilai sebelah kanan tanda `:`
- Kondisi diletakkan di dalam kurung diikuti dengan tanda `?` yang memisahkan dengan nilai.
- Formatnya `? ... : ...`

### Array

Array merupakan variabel khusus yang dapat menyimpan nilai lebih dari satu.

Beberapa jenis array:
- Array Numerik
- Array Asosiatif
- Array 1 dimensi
- Array 2 dimensi/ multi-dimensi

Contoh:

```php
<?php
// Array Numerik
$hari = [
    "Senin",
    "Selasa",
    "Rabu",
    "Kamis",
    "Jum'at",
    "Sabtu",
    "Ahad"
];
var_dump($hari);

// Array Asosiatif
$siswa = [
    "nama" => "Joko Santoso",
    "kelas" => 11,
    "jurusan" => "PPLG"
];
var_dump($siswa);

// Array 2 dimensi/ multi-dimensi
$pegawai = [
    "nama" => "Rudi Hermanto",
    "alamat" => [
        "desa" => "Rejosari",
        "kec" => "Kebonsari",
        "kab" => "Madiun"
    ]
];
var_dump($pegawai);
?>
```

### Statement Control

- Statement control akan mengatur bagaimana data akan ditampilkan sesuai dengan kondisi tertentu
- Statement control menjadi kunci dari logika program
- Kesalahan dalam penggunaan statement control mungkin tidak menampilkan pesan error, tetapi aplikasi tidak berjalan sesuai semestinya.

#### Percabangan `IF`
#### Percabangan `IF-ELSE`
#### Percabangan `IF-ELSEIF-ELSE`
#### Percabangan `SWITCH`
#### Perulangan `WHILE`
#### Perulangan `DO-WHILE`
#### Perulangan `FOR`
#### Perulangan `FOREACH`

### Modularitas

## Function
### Function Dasar
### Function dengan Argumen
### Function dengan Nilai Kembalian
### Function untuk Operasi String
### Function untuk Operasi Tanggal
### Function untuk Operasi Matematika
### Function untuk Penanganan File

## Variabel Superglobal
### Variabel $GLOBAL
### Variabel $_SERVER

## Session

## Cookie

## Penanganan Form
### Variabel $_GET
### Variabel $_POST
### Variabel $_FILES

## Penanganan Database

## Praktik Membuat Aplikasi
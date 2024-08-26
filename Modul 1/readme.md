# Jobsheet Modul 1 Pertemuan 1 & 2

Jobsheet ini bertujuan untuk membantu mahasiswa memahami dan mengimplementasikan konsep dasar `Object-Oriented Programming (OOP)` dalam pemrograman PHP. Mahasiswa akan belajar `cara membuat class, objek`, serta menerapkan prinsip-prinsip OOP seperti `Encapsulation`, `Inheritance`, `Polymorphism`, dan `Abstraction`.

## Penulis
Nama: Muhamad Subhi Adzani  
NIM: 230202017
Mahasiswa Politeknik Negeri Cilacap  
Program Studi Teknik Informatika

## Penjelasan pembuatan Class dan Object

Proyek ini adalah contoh sederhana dari implementasi OOP (Object-Oriented Programming) dalam PHP. Kita membuat class `Mahasiswa` yang memiliki atribut untuk menyimpan data mahasiswa, serta metode untuk menampilkan data tersebut.

```bash
Class: Mendefinisikan template untuk membuat object.
Attribute: Variabel yang menyimpan data dalam class.
```
### 1. Class Mahasiswa
- **Atribut**:
  - `nama`: Menyimpan nama mahasiswa.
  - `nim`: Menyimpan nomor induk mahasiswa (NIM).
  - `jurusan`: Menyimpan jurusan mahasiswa.
  
- **Constructor**:
  - `__construct($nama, $nim, $jurusan)`: Menginisialisasi atribut `nama`, `nim`, dan `jurusan` dengan nilai yang diberikan saat objek dibuat.

- **Metode**:
  - `tampilkanData()`: Mengembalikan string yang berisi data mahasiswa.

## Cara Menggunakan
1. Buat objek dari class `Mahasiswa` dengan memberikan nama, NIM, dan jurusan.
2. Panggil metode `tampilkanData()` untuk menampilkan data mahasiswa.

## Source code

```php
<?php
// Definisi Class
class Mahasiswa {
    // Atribut atau Properties
    public $nama;
    public $nim;
    public $jurusan;

    // Constructor
    public function __construct($nama, $nim, $jurusan) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    // Metode atau Function
    public function tampilkanData() {
        return "Nama: $this->nama, NIM: $this->nim, Jurusan: $this->jurusan";
    }
}

// Instansiasi Objek
$mahasiswa1 = new Mahasiswa("Muhamad Subhi Adzani", "230202017", "Komputer dan Bisnis");
echo $mahasiswa1->tampilkanData();
?>
```

## Output Program
```bash
Nama: Muhamad Subhi Adzani, NIM: 230202017, Jurusan: Komputer dan Bisnis
```

## Penjelasan Implementasi Encapsulation dengan Class Mahasiswa
Dokumen ini menjelaskan implementasi Encapsulation dalam PHP menggunakan class `Mahasiswa`. Encapsulation adalah prinsip OOP yang melibatkan pembungkusan data dan penyediaan akses terhadap data tersebut melalui metode getter dan setter. Dalam contoh ini, kita akan menggunakan class `Mahasiswa` untuk mengelola data mahasiswa seperti nama, NIM, dan jurusan.

```bash
Atribut class biasanya 
diatur menjadi private 
untuk melindungi data dari akses langsung 
dan dimanipulasi melalui metode getter dan setter.
```
### 1. **Class Mahasiswa**
- **Atribut Private**:
  - `nama`: Menyimpan nama mahasiswa.
  - `nim`: Menyimpan nomor induk mahasiswa (NIM).
  - `jurusan`: Menyimpan jurusan mahasiswa.

- **Constructor**:
  - `__construct($nama, $nim, $jurusan)`: Menginisialisasi atribut `nama`, `nim`, dan `jurusan` dengan nilai yang diberikan saat objek dibuat.

- **Getter dan Setter**:
  - `getNama()`: Mengembalikan nilai dari atribut `nama`.
  - `setNama($nama)`: Mengatur nilai untuk atribut `nama`.
  - `getNim()`: Mengembalikan nilai dari atribut `nim`.
  - `setNim($nim)`: Mengatur nilai untuk atribut `nim`.
  - `getJurusan()`: Mengembalikan nilai dari atribut `jurusan`.
  - `setJurusan($jurusan)`: Mengatur nilai untuk atribut `jurusan`.

### 2. **Instansiasi dan Penggunaan Objek**
- Membuat objek `Mahasiswa` dengan nama, NIM, dan jurusan awal.
- Menampilkan data mahasiswa menggunakan getter.
- Mengubah data mahasiswa menggunakan setter.
- Menampilkan data mahasiswa setelah diubah.


## Source code

```php
<?php
class Mahasiswa {
    private $nama;
    private $nim;
    private $jurusan;

    // Constructor
    public function __construct($nama, $nim, $jurusan) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    // Getter untuk nama
    public function getNama() {
        return $this->nama;
    }

    // Setter untuk nama
    public function setNama($nama) {
        $this->nama = $nama;
    }

    // Getter untuk NIM
    public function getNim() {
        return $this->nim;
    }

    // Setter untuk NIM
    public function setNim($nim) {
        $this->nim = $nim;
    }

    // Getter untuk jurusan
    public function getJurusan() {
        return $this->jurusan;
    }

    // Setter untuk jurusan
    public function setJurusan($jurusan) {
        $this->jurusan = $jurusan;
    }
}

// Instansiasi objek Mahasiswa
$mahasiswa1 = new Mahasiswa("Muhamad Subhi A", "230202017", "Komputer dan Bisnis");

// Menggunakan getter untuk menampilkan atribut
echo "Nama: " . $mahasiswa1->getNama() . "<br>";
echo "NIM: " . $mahasiswa1->getNim() . "<br>";
echo "Jurusan: " . $mahasiswa1->getJurusan() . "<br>";

// Menggunakan setter untuk mengubah nilai atribut
$mahasiswa1->setNama("Muhammad Rifandi");
$mahasiswa1->setNim("230202018");
$mahasiswa1->setJurusan("Komputer dan Bisnis");

// Menampilkan nilai setelah diubah
echo "Nama (Setelah diubah): " . $mahasiswa1->getNama() . "<br>";
echo "NIM (Setelah diubah): " . $mahasiswa1->getNim() . "<br>";
echo "Jurusan (Setelah diubah): " . $mahasiswa1->getJurusan() . "<br>";
?>
```

## Output Program
```bash
Sebelum diubah:
Nama: Muhamad Subhi A
NIM: 230202017
Jurusan: Komputer dan Bisnis

Setelah diubah:
Nama: Muhammad Rifandi
NIM: 230202018
Jurusan: Komputer dan Bisnis
```
## Penjelasan Implementasi Inheritance dengan Class Dosen

Dokumen ini menjelaskan penerapan konsep Inheritance dalam PHP menggunakan class `Pengguna` dan `Dosen`. Inheritance memungkinkan kita untuk membuat class baru yang mewarisi atribut dan metode dari class yang ada. Dalam contoh ini, class `Dosen` mewarisi dari class `Pengguna`, menambahkan atribut dan metode tambahan.
```bash
Class turunan mewarisi atribut dan 
metode dari class induk, 
memungkinkan penggunaan kembali kode 
dan penambahan fungsionalitas baru.
```
### 1. **Class Pengguna**
- **Atribut Protected**:
  - `nama`: Menyimpan nama pengguna. Atribut ini dilindungi (protected) sehingga dapat diakses oleh class turunan.
  
- **Constructor**:
  - `__construct($nama)`: Menginisialisasi atribut `nama` dengan nilai yang diberikan.

- **Metode**:
  - `getNama()`: Mengembalikan nilai dari atribut `nama`.

### 2. **Class Dosen**
- **Atribut Private**:
  - `mataKuliah`: Menyimpan nama mata kuliah yang diajarkan oleh dosen.

- **Constructor**:
  - `__construct($nama, $mataKuliah)`: Menginisialisasi atribut `nama` menggunakan constructor dari class induk (`Pengguna`) dan menginisialisasi `mataKuliah`.

- **Metode**:
  - `getMataKuliah()`: Mengembalikan nilai dari atribut `mataKuliah`.
  - `tampilkanDataDosen()`: Menampilkan informasi lengkap dosen, termasuk nama dan mata kuliah.

### 3. **Instansiasi dan Penggunaan Objek**
- Membuat objek `Dosen` dengan nama dan mata kuliah.
- Menampilkan data dosen menggunakan metode `tampilkanDataDosen()`.
## Source code

```php
<?php
// Definisi Class Pengguna
class Pengguna {
    protected $nama;

    // Constructor untuk inisialisasi nama
    public function __construct($nama) {
        $this->nama = $nama;
    }

    // Metode untuk mendapatkan nama
    public function getNama() {
        return $this->nama;
    }
}

// Definisi Class Dosen yang mewarisi Class Pengguna
class Dosen extends Pengguna {
    private $mataKuliah;

    // Constructor untuk inisialisasi nama dan mataKuliah
    public function __construct($nama, $mataKuliah) {
        // Memanggil constructor dari class induk (Pengguna)
        parent::__construct($nama);
        $this->mataKuliah = $mataKuliah;
    }

    // Metode untuk mendapatkan mataKuliah
    public function getMataKuliah() {
        return $this->mataKuliah;
    }

    // Metode untuk menampilkan informasi Dosen
    public function tampilkanDataDosen() {
        return "Nama Dosen: " . $this->getNama() . "<br>Mata Kuliah: " . $this->getMataKuliah();
    }
}

// Instansiasi objek dari class Dosen
$dosen1 = new Dosen("Riyadi S.T,.M.Eng.", "Sistem Instalasi Mobile");

// Menampilkan data dosen
echo $dosen1->tampilkanDataDosen();
?>
```

## Output Program
```bash
Nama Dosen: DRiyadi S.T,.M.Eng.
Mata Kuliah: Sistem Instalasi Mobile
```

## Penjelasan Implementasi Polymorphism dengan Method Overriding

Dokumen ini menjelaskan penerapan konsep Polymorphism dalam PHP melalui penggunaan method overriding pada class `Pengguna`, `Dosen`, dan `Mahasiswa`. Polymorphism memungkinkan kita untuk mendefinisikan metode dengan nama yang sama tetapi dengan implementasi yang berbeda di class yang berbeda.
```bash
 Metode dalam class turunan dapat diubah (override) 
untuk menyediakan implementasi 
yang berbeda dari metode dalam class induk.
```
### 1. **Class Pengguna**
- **Constructor**:
  - `__construct()`: Constructor dasar untuk inisialisasi.
  
- **Metode**:
  - `aksesFitur()`: Mengembalikan string yang menyatakan fitur umum yang dapat diakses oleh pengguna.

### 2. **Class Dosen**
- **Constructor**:
  - `__construct()`: Constructor khusus untuk inisialisasi, memanggil constructor dari class induk (`Pengguna`).
  
- **Metode**:
  - `aksesFitur()`: Override dari metode `aksesFitur()` di class induk untuk memberikan informasi fitur yang khusus untuk Dosen.

### 3. **Class Mahasiswa**
- **Constructor**:
  - `__construct()`: Constructor khusus untuk inisialisasi, memanggil constructor dari class induk (`Pengguna`).
  
- **Metode**:
  - `aksesFitur()`: Override dari metode `aksesFitur()` di class induk untuk memberikan informasi fitur yang khusus untuk Mahasiswa.

### 4. **Instansiasi dan Penggunaan Objek**
- Membuat objek dari class `Pengguna`, `Dosen`, dan `Mahasiswa`.
- Memanggil metode `aksesFitur()` dari masing-masing objek untuk menampilkan informasi fitur yang dapat diakses.
## Source code

```php
<?php
// Definisi Class Pengguna
class Pengguna {
    // Constructor untuk inisialisasi 
    public function __construct() {
    }
    // Metode aksesFitur() yang akan di-override oleh class turunannya
    public function aksesFitur() {
        return "Pengguna dapat mengakses fitur umum.";
    }
}
    
// Definisi Class Dosen yang mewarisi Class Pengguna
class Dosen extends Pengguna {
    // Constructor untuk inisialisasi 
    public function __construct() {
    }
    // Override metode aksesFitur() khusus untuk Dosen
    public function aksesFitur() {
        return "Dosen dapat mengakses fitur manajemen kelas dan input nilai.";
    }
}

// Definisi Class Mahasiswa yang mewarisi Class Pengguna
class Mahasiswa extends Pengguna {
    // Constructor untuk inisialisasi 
    public function __construct() {
    }
    // Override metode aksesFitur() khusus untuk Mahasiswa
    public function aksesFitur() {
        return "Mahasiswa dapat mengakses fitur pembelajaran dan melihat nilai.";
    }
}

// Instansiasi objek dari class Dosen dan Mahasiswa
$pengguna1 = new Pengguna();
$dosen1 = new Dosen();
$mahasiswa1 = new Mahasiswa();

// Memanggil metode aksesFitur() dari masing-masing objek
echo "Akses Fitur Pengguna: " . $pengguna1->aksesFitur() . "<br>";
echo "Akses Fitur Dosen: " . $dosen1->aksesFitur() . "<br>";
echo "Akses Fitur Mahasiswa: " . $mahasiswa1->aksesFitur() . "<br>";
?>
```

## Output Program
```bash
Akses Fitur Pengguna: Pengguna dapat mengakses fitur umum.
Akses Fitur Dosen: Dosen dapat mengakses fitur manajemen kelas dan input nilai.
Akses Fitur Mahasiswa: Mahasiswa dapat mengakses fitur pembelajaran dan melihat nilai.
```
## Penjelasan Implementasi Abstraction dengan Class Abstrak
Dokumen ini menjelaskan penerapan konsep Abstraction dalam PHP menggunakan class abstrak `Pengguna` dan class konkret `Dosen` serta `Mahasiswa`. Abstraction adalah prinsip OOP yang melibatkan mendefinisikan metode dalam class abstrak yang harus diimplementasikan oleh class turunan.

```bash
Class abstrak tidak bisa diinstansiasi secara langsung 
dan digunakan sebagai dasar untuk class lain. 
Class ini mendefinisikan metode abstrak 
yang harus diimplementasikan oleh class turunan.
```
### 1. **Class Abstrak Pengguna**
- **Constructor**:
  - `__construct()`: Constructor untuk inisialisasi umum yang dapat digunakan oleh semua pengguna.
  
- **Metode Abstrak**:
  - `aksesFitur()`: Metode abstrak yang harus diimplementasikan oleh subclass. Tidak memiliki implementasi di class abstrak.

### 2. **Class Dosen**
- **Constructor**:
  - `__construct()`: Constructor untuk inisialisasi khusus untuk Dosen.
  
- **Implementasi Metode**:
  - `aksesFitur()`: Implementasi dari metode `aksesFitur()` yang mendefinisikan fitur khusus yang dapat diakses oleh Dosen.

### 3. **Class Mahasiswa**
- **Constructor**:
  - `__construct()`: Constructor untuk inisialisasi khusus untuk Mahasiswa.
  
- **Implementasi Metode**:
  - `aksesFitur()`: Implementasi dari metode `aksesFitur()` yang mendefinisikan fitur khusus yang dapat diakses oleh Mahasiswa.

### 4. **Instansiasi dan Penggunaan Objek**
- Membuat objek dari class `Dosen` dan `Mahasiswa`.
- Memanggil metode `aksesFitur()` dari masing-masing objek untuk menampilkan fitur yang dapat diakses.

## Source code

```php
<?php
// Definisi Class Abstrak Pengguna
abstract class Pengguna {
    // Constructor untuk inisialisasi 
    public function __construct() {
        // Inisialisasi umum untuk semua pengguna
    }

    // Metode abstrak yang harus diimplementasikan oleh subclass
    abstract public function aksesFitur();
}

// Definisi Class Dosen yang mewarisi Class Pengguna
class Dosen extends Pengguna {
    // Constructor untuk inisialisasi 
    public function __construct() {
        // Inisialisasi khusus untuk dosen
    }

    // Implementasi metode aksesFitur() khusus untuk Dosen
    public function aksesFitur() {
        return "Dosen dapat mengakses fitur manajemen kelas dan input nilai.";
    }
}

// Definisi Class Mahasiswa yang mewarisi Class Pengguna
class Mahasiswa extends Pengguna {
    // Constructor untuk inisialisasi 
    public function __construct() {
        // Inisialisasi khusus untuk mahasiswa
    }

    // Implementasi metode aksesFitur() khusus untuk Mahasiswa
    public function aksesFitur() {
        return "Mahasiswa dapat mengakses fitur pembelajaran dan melihat nilai.";
    }
}

// Instansiasi objek dari class Dosen dan Mahasiswa
$dosen1 = new Dosen();
$mahasiswa1 = new Mahasiswa();

// Memanggil metode aksesFitur() dari masing-masing objek
echo "Akses Fitur Dosen: " . $dosen1->aksesFitur() . "<br>";
echo "Akses Fitur Mahasiswa: " . $mahasiswa1->aksesFitur() . "<br>";
?>

```

## Output Program
```bash
Akses Fitur Dosen: Dosen dapat mengakses fitur manajemen kelas dan input nilai.
Akses Fitur Mahasiswa: Mahasiswa dapat mengakses fitur pembelajaran dan melihat nilai.
```

## License
Pull requests are welcome. For major changes, please open an issue first
to discuss what you would like to change.

Please make sure to update tests as appropriate.


[MIT](https://choosealicense.com/licenses/mit/)

# Jobsheet 1 pertemuan 3 dan 4

Jobsheet ini bertujuan untuk membantu mahasiswa memahami dan mengimplementasikan `Object-Oriented Programming (OOP)` dalam PHP memungkinkan pengembangan
perangkat lunak yang lebih terstruktur dan modular. Konsep-konsep seperti `Inheritance`,
`Polymorphism`, `Encapsulation`, dan `Abstraction` adalah pilar penting yang membuat
OOP efisien. Dengan menguasai konsep-konsep ini, pengembang dapat membuat kode
yang lebih fleksibel, dapat digunakan kembali, dan mudah dipelihara, berikut struktur kode dasarnya:
### 1. **Definisi Kelas Mahasiswa**
Kelas `Mahasiswa` didefinisikan dengan tiga atribut utama:
- **$nama**: Menyimpan nama mahasiswa.
- **$nim**: Menyimpan Nomor Induk Mahasiswa (NIM).
- **$jurusan**: Menyimpan jurusan mahasiswa.

### 2. **Constructor**
Constructor digunakan untuk menginisialisasi objek `Mahasiswa` dengan nilai untuk `nama`, `nim`, dan `jurusan`.

### 3. **Metode tampilkanData()**
Metode `tampilkanData()` digunakan untuk menampilkan informasi lengkap tentang mahasiswa dalam bentuk string.

### 4. **Instansiasi Objek**
Objek `Mahasiswa` diinstansiasi dengan data konkret, dan kemudian metode `tampilkanData()` dipanggil untuk menampilkan informasi mahasiswa.

## Penulis
Nama: Muhamad Subhi Adzani  
NIM: 230202017   
Mahasiswa Politeknik Negeri Cilacap  
Program Studi Teknik Informatika  

# Penjelasan 1. Membuat Class dan Object
Proyek ini merupakan contoh sederhana dari implementasi Object-Oriented Programming (OOP) dalam PHP. Di sini, kita membuat sebuah kelas `Mahasiswa` yang digunakan untuk menyimpan dan menampilkan informasi mengenai seorang mahasiswa, termasuk nama, NIM, dan jurusannya tanpa menggunakan constructor, berikut contohnya:

```bash
public function tampilkanData($nama, $nim, $jurusan) {}
relasinya dengan echo $mahasiswa1->tampilkanData("Muhamad Subhi Adzani", "230202017", "Komputer dan Bisnis");
```
jika kita tidak menggunakan constructor maka kita harus mengisi value pada echo tampilkanData.
## Source code

```php
<?php
// Definisi Kelas
class Mahasiswa {
// Atribut atau Properties
    public $nama;
    public $nim;
    public $jurusan;

    // Method untuk menampilkan data
    public function tampilkanData($nama, $nim, $jurusan) {
    $this->nama = $nama;
    $this->nim = $nim;
    $this->jurusan = $jurusan;
    return "Mahasiswa ini bernama $this->nama dengan NIM: $this->nim dari jurusan: $this->jurusan.";
    }
}
// Instansiasi Objek
$mahasiswa1 = new Mahasiswa();
echo $mahasiswa1->tampilkanData("Muhamad Subhi Adzani", "230202017", "Komputer dan Bisnis");
?>
```

## Output Program
```bash
Mahasiswa ini bernama Muhamad Subhi Adzani dengan NIM: 230202017 dari jurusan: Komputer dan Bisnis.
```


# Penjelasan 2. Implementasi Constructor

Proyek ini mendemonstrasikan konsep dasar dari Object-Oriented Programming (OOP) dalam PHP dengan membuat sebuah kelas `Mahasiswa`. Kelas ini memiliki atribut seperti `nama`, `nim`, dan `jurusan`, serta sebuah metode untuk menampilkan data mahasiswa menggunakan constructor.

### **Constructor**
Constructor digunakan untuk menginisialisasi objek `Mahasiswa` dengan nilai untuk `nama`, `nim`, dan `jurusan`, berikut contohnya:
```bash
public function __construct($nama, $nim, $jurusan) {}
relasinya dengan $mahasiswa1 = new Mahasiswa("Muhamad Subhi Adzani", "230202017", "Komputer dan Bisnis");
```
jika kita menggunakan constructor maka kita tidak perlu mengisi value pada echo tampilkanData, melaikan mengisi value pada new mahasiswa untuk menjalankan function.
## Source code

```php
?php
// Definisi Kelas
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
        return "Mahasiswa ini bernama $this->nama dengan NIM: $this->nim dari Jurusan: $this->jurusan.";
    }
}
// Instansiasi Objek
$mahasiswa1 = new Mahasiswa("Muhamad Subhi Adzani", "230202017", "Komputer dan Bisnis");
echo $mahasiswa1->tampilkanData();
?>
```
## Output Program
```bash
Mahasiswa ini bernama Muhamad Subhi Adzani dengan NIM: 230202017 dari Jurusan: Komputer dan Bisnis.
```
# Penjelasan 3. Membuat Metode Tambahan
Proyek ini merupakan contoh sederhana implementasi konsep Object-Oriented Programming (OOP) dalam PHP. Kode ini menunjukkan bagaimana cara membuat dan menggunakan kelas `Mahasiswa` dengan atribut `nama`, `nim`, dan `jurusan`. Selain itu, metode untuk menampilkan dan memperbarui jurusan mahasiswa juga disertakan.

### **penambahan Metode updatejurusan()**
Metode `updatejurusan($jurusan)` digunakan untuk memperbarui nilai `jurusan` pada objek Mahasiswa.

### **perubahan intansiasi objek**
Objek `Mahasiswa` diinstansiasi dengan data konkret, dan kemudian metode `tampilkanData()` dipanggil untuk menampilkan informasi mahasiswa. Setelah itu, jurusan mahasiswa diperbarui menggunakan metode `updatejurusan()` dan ditampilkan kembali.

## Source code

```php
<?php
// Definisi Kelas
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
        return "Mahasiswa ini bernama $this->nama dengan NIM: $this->nim dari Jurusan: $this->jurusan.";
    }

    public function updatejurusan($jurusan) {
        return $this->jurusan = $jurusan;
    }
}
// Instansiasi Objek
$mahasiswa1 = new Mahasiswa("Muhamad Subhi Adzani", "230202017", "Komputer dan Bisnis");
echo $mahasiswa1->tampilkanData(). "<br>";
$mahasiswa1->updatejurusan("JKB");
echo $mahasiswa1->tampilkanData();
?>
```

## Output Program
```bash
Mahasiswa ini bernama Muhamad Subhi Adzani dengan NIM: 230202017 dari Jurusan: Komputer dan Bisnis.
Mahasiswa ini bernama Muhamad Subhi Adzani dengan NIM: 230202017 dari Jurusan: JKB.
```
# Penjelasan 4. Penggunaan Atribut dan Metode
Proyek ini menunjukkan bagaimana menerapkan konsep Object-Oriented Programming (OOP) dalam PHP dengan membuat dan mengelola objek `Mahasiswa`. Kode ini melibatkan pembuatan atribut, constructor, metode untuk menampilkan data, serta setter untuk memperbarui data seperti NIM dan jurusan mahasiswa.

### **penambahan Setter untuk NIM**
Metode `setNim($nim)` digunakan untuk memperbarui nilai atribut `nim`.

### **perubahan intansiasi objek**
Objek `Mahasiswa` diinstansiasi dengan data konkret, dan kemudian metode `tampilkanData()` dipanggil untuk menampilkan informasi mahasiswa. Setelah itu, nilai NIM diperbarui menggunakan metode `setNim()` dan jurusan diperbarui menggunakan `metode updateJurusan()`, kemudian ditampilkan kembali.

## Source code

```php
<?php
// Definisi Kelas
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

    // Setter untuk NIM
    public function setNim($nim) {
        $this->nim = $nim;
    }

    // Metode atau Function
    public function tampilkanData() {
        return "Mahasiswa ini bernama $this->nama dengan NIM: $this->nim dari Jurusan: $this->jurusan.";
    }

    // Metode untuk mengupdate jurusan
    public function updateJurusan($jurusan) {
        $this->jurusan = $jurusan;
    }
}

// Instansiasi Objek
$mahasiswa1 = new Mahasiswa("Muhamad Subhi Adzani", "230202017", "Komputer dan Bisnis");

// Tampilkan data mahasiswa yang sudah diperbarui dengan memanggil metode tampilkanData()
echo $mahasiswa1->tampilkanData() . "<br>";

// Menggunakan setter untuk mengubah nilai atribut NIM
$mahasiswa1->setNim("230202018");

// Update jurusan dan tampilkan data yang diperbarui
$mahasiswa1->updateJurusan("JKB");
echo $mahasiswa1->tampilkanData();
?>
```

## Output Program
```bash
Mahasiswa ini bernama Muhamad Subhi Adzani dengan NIM: 230202017 dari Jurusan: Komputer dan Bisnis.
Mahasiswa ini bernama Muhamad Subhi Adzani dengan NIM: 230202018 dari Jurusan: JKB.
```
# Penjelasan Tugas implementasi kelas dosen
Proyek ini menunjukkan implementasi sederhana dari konsep Object-Oriented Programming (OOP) dalam PHP. Di dalam proyek ini, kita membuat sebuah kelas `Dosen` yang digunakan untuk menyimpan dan menampilkan informasi mengenai seorang dosen, termasuk nama, NIP, dan mata kuliah yang diajarkan.

### 1. **Definisi Kelas Dosen**
Kelas `Dosen` memiliki atribut utama:
- **$nama**: Menyimpan nama dosen.
- **$nip**: Menyimpan Nomor Induk Pegawai (NIP).
- **$matakuliah**: Menyimpan mata kuliah yang diajarkan oleh dosen.

### 2. **Constructor dan Metode tampilkanData()**
Kelas ini memiliki constructor yang digunakan untuk menginisialisasi atribut ketika objek dari kelas `Dosen` dibuat. Selain itu, terdapat metode `tampilkanData()` yang berfungsi untuk menampilkan informasi lengkap tentang dosen tersebut.

### 3. **intansiasi objek**
Objek dari kelas `Dosen` diinstansiasi dengan memberikan nilai untuk nama, NIP, dan mata kuliah yang diajarkan. `Metode tampilkanData()` kemudian dipanggil untuk menampilkan data tersebut.

## Source code

```php
<?php
// Definisi Dosen
class Dosen {
// Atribut atau Properties
    public $nama;
    public $nip;
    public $matakuliah;

    // Constructor
    public function __construct($nama, $nip, $matakuliah) {
    $this->nama = $nama;
    $this->nip = $nip;
    $this->matakuliah = $matakuliah;
    }
    // Metode atau Function
    public function tampilkanData() {
        return "Dosen ini bernama $this->nama dengan NIP: $this->nip mengajar Matakuliah $this->matakuliah. pada semester 3";
    }
}
// Instansiasi Objek
$dosen1 = new Dosen("Riyadi S.T,.M.Eng.", "2374627434", "SIM");
echo $dosen1->tampilkanData();
?>
```

## Output Program
```bash
Dosen ini bernama Riyadi S.T,.M.Eng. dengan NIP: 2374627434 mengajar Matakuliah SIM. pada semester 3
```


## License
Pull requests are welcome. For major changes, please open an issue first
to discuss what you would like to change.

Please make sure to update tests as appropriate.

[MIT](https://choosealicense.com/licenses/mit/)
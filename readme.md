# Pemrograman Berorientasi Objek (OOP) dalam PHP

Repositori ini menyediakan pengenalan tentang Pemrograman Berorientasi Objek (OOP) dalam PHP, mencakup konsep-konsep utama seperti class, atribut/properti, visibility, constructor, getter dan setter, method/fungsi, inheritance, dan lainnya. Di bawah ini adalah penjelasan rinci dari setiap konsep.

## Daftar Isi

**1. Class**  
**2. Atribut/Properti**   
**3. Visibility (Public, Private, Protected)**   
**4. Constructor**   
**5. Getter dan Setter**  
**6. Method/Fungsi**  
**7. Inheritance (Extends)**  
**8. Parent**  
**9. Return**

# Class
Class adalah blueprint atau cetak biru untuk membuat objek. Class mendefinisikan struktur dan perilaku objek. Misalnya, jika Anda memiliki class `Mobil`, Anda bisa membuat berbagai objek seperti `MobilHonda`, `MobilToyota`, dll., yang memiliki ciri dan perilaku yang didefinisikan oleh class Mobil.

```php
class Prodi {
    public $nama;
    public $kode;
    
    public function tampilkanInfo() {
        echo "Program Studi: $this->nama, Kode: $this->kode";
    }
}
```
# Atribut/Properti
Atribut atau properti adalah variabel yang dideklarasikan di dalam sebuah class. Atribut ini digunakan untuk menyimpan data atau keadaan dari objek. Misalnya, sebuah class `Mobil` bisa memiliki atribut seperti `warna`, `merk`, dan `mesin`.


```php
class Dosen {
    public $nama;
    public $nidn;
    private $prodi;
}
```
Dalam contoh di atas, `warna`, `merk`, dan `mesin` adalah atribut dari class `Mobil`. Atribut `mesin` memiliki visibility `private`, yang berarti hanya bisa diakses dari dalam class Mobil.

# Visibility (Public, Private, Protected)
Visibility menentukan seberapa aksesibilitas dari properti dan metode dalam class:

- **Public:** Anggota class (variabel atau metode) yang dideklarasikan dengan `public` dapat diakses dari luar class, serta di dalam class itu sendiri.
- **Private:** Anggota class yang dideklarasikan dengan `private` hanya dapat diakses dari dalam class tempat anggota tersebut dideklarasikan. Tidak bisa diakses dari luar class atau dari subclass.
- **Protected:** Anggota class yang dideklarasikan dengan `protected` dapat diakses dari dalam class itu sendiri dan oleh subclass, tetapi tidak dapat diakses dari luar class.

```php
class Dosen {
    public $nama;
    private $nidn;
    protected $prodi;
    
    public function setNidn($nidn) {
        $this->nidn = $nidn;
    }
    
    private function checkNidn() {
        return $this->nidn;
    }
}
```
## Constructor
Constructor adalah metode khusus yang dipanggil otomatis saat objek dari class dibuat. Constructor biasanya digunakan untuk menginisialisasi properti objek.

```php
class Mahasiswa {
    public $nama;
    public $nim;
    
    public function __construct($nama, $nim) {
        $this->nama = $nama;
        $this->nim = $nim;
    }
}
$mahasiswa = new Mahasiswa("Budi", "123456");
```
## Getter dan Setter
Getter dan setter adalah metode yang digunakan untuk mengakses (getter) dan mengubah (setter) nilai dari properti private atau protected dalam class. Ini memungkinkan kontrol lebih terhadap data yang disimpan dalam objek.

```php
class Mahasiswa {
    private $nama;
    private $nim;
    
    public function getNama() {
        return $this->nama;
    }
    
    public function setNama($nama) {
        $this->nama = $nama;
    }
}
```

## Method/Fungsi
Method (atau fungsi) adalah bagian dari class yang berfungsi untuk mendefinisikan perilaku objek. Method dapat digunakan untuk melakukan operasi pada data atau untuk melakukan tindakan tertentu.

```php
class Prodi {
    public $nama;
    
    public function tampilkanInfo() {
        echo "Program Studi: $this->nama";
    }
}
```

## Inheritance (Extends)
`extends` digunakan untuk membuat subclass (class turunan) yang mewarisi semua properti dan metode dari superclass (class induk). Subclass dapat menambahkan atau mengubah perilaku dari superclass.


```php
class Person {
    public $nama;
    
    public function perkenalan() {
        echo "Halo, nama saya $this->nama";
    }
}

class Dosen extends Person {
    public $nidn;
    
    public function mengajar() {
        echo "Dosen $this->nama sedang mengajar.";
    }
}
```
## Parent
`parent` digunakan di dalam subclass untuk mengakses metode atau properti dari superclass (class induk). Ini memungkinkan kita untuk memanggil atau mengubah perilaku yang diwarisi dari superclass.

```php
class Person {
    public $nama;
    
    public function perkenalan() {
        echo "Halo, nama saya $this->nama";
    }
}

class Dosen extends Person {
    public function perkenalan() {
        parent::perkenalan(); // Memanggil method perkenalan dari Person
        echo " dan saya seorang dosen.";
    }
}
```
##  Return
`return` digunakan di dalam metode untuk mengembalikan nilai dari metode tersebut ke tempat pemanggilan. Ini memungkinkan metode untuk memberikan hasil dari operasi yang telah dilakukan.
```php
class Mahasiswa {
    private $nama;
    private $nim;
    
    public function getNama() {
        return $this->nama;
    }
    
    public function setNama($nama) {
        $this->nama = $nama;
    }
}
```
## Kesimpulan
Dengan memahami konsep-konsep ini, Anda dapat mulai membangun aplikasi yang lebih terstruktur dan mudah dipelihara menggunakan prinsip OOP dalam PHP.

## License
Pull requests are welcome. For major changes, please open an issue first
to discuss what you would like to change.

Please make sure to update tests as appropriate.

[MIT](https://choosealicense.com/licenses/mit/)
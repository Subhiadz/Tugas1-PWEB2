# Jobsheet 3 pertemuan 5 dan 6

Jobsheet ini bertujuan untuk membantu mahasiswa memahami dan mengimplementasikan 
Object-Oriented Programming (OOP) dalam PHP memungkinkan pengembangan
perangkat lunak yang lebih terstruktur dan modular. Konsep-konsep seperti Inheritance,
Polymorphism, Encapsulation, dan Abstraction adalah pilar penting yang membuat
OOP efisien. Dengan menguasai konsep-konsep ini, pengembang dapat membuat kode
yang lebih fleksibel, dapat digunakan kembali, dan mudah dipelihara.

## Penulis
Nama: Muhamad Subhi Adzani  
NIM: 230202017   
Mahasiswa Politeknik Negeri Cilacap  
Program Studi Teknik Informatika  

# Penjelasan 1. Inheritance
Proyek ini menunjukkan bagaimana menerapkan konsep Object-Oriented Programming (OOP) dalam PHP dengan menggunakan pewarisan (inheritance). Di dalam proyek ini, kita membuat dua kelas: `Person` dan `Student`. Kelas `Student` mewarisi dari kelas `Person` dan menambahkan atribut serta metode tambahan.

### **Definisi Kelas Person**
Kelas `Person` memiliki atribut:
- **$name**: Menyimpan nama orang.

Kelas ini juga memiliki:
- **Constructor**: Untuk menginisialisasi atribut nama saat objek dibuat.
- **Metode getName()**: Untuk mendapatkan nama orang.

### **Definisi Kelas Student**
Kelas `Student` mewarisi dari `Person` dan memiliki atribut tambahan:
- **$studentID**: Menyimpan ID mahasiswa..

Kelas ini juga memiliki:
- **Constructor**: Untuk menginisialisasi nama (menggunakan constructor dari kelas induk) dan ID mahasiswa saat objek dibuat.
- **getStudentID()**: Untuk mendapatkan ID mahasiswa.

## Source code

```php
<?php
// Definisi Kelas Person
class Person {
    // Atribut
    protected $name;

    // Constructor
    public function __construct($name) {
        $this->name = $name;
    }

    // Metode untuk mendapatkan nama
    public function getName() {
        return $this->name;
    }
}

// Definisi Kelas Student yang mewarisi dari Person
class Student extends Person {
    // Atribut tambahan
    private $studentID;

    // Constructor
    public function __construct($name, $studentID) {
        // Memanggil constructor dari kelas induk (Person)
        parent::__construct($name);
        $this->studentID = $studentID;
    }

    // Metode untuk mendapatkan studentID
    public function getStudentID() {
        return $this->studentID;
    }
}

// Contoh penggunaan
$student1 = new Student("Muhamad Subhi Adzani", "23020201");
echo "Name: " . $student1->getName() . "<br>";
echo "Student ID: " . $student1->getStudentID();
?>
```

## Output Program
```bash
Name: Muhamad Subhi Adzani
Student ID: 23020201
```
# Penjelasan 2. Polymorphism
Proyek ini menunjukkan bagaimana menerapkan konsep Object-Oriented Programming (OOP) dalam PHP dengan menggunakan pewarisan (inheritance) dan override metode. Di dalam proyek ini, terdapat tiga kelas: `Person`, `Student`, dan `Teacher`. Kelas `Student` dan `Teacher` mewarisi dari kelas `Person` dan menambahkan atribut serta metode tambahan, termasuk mengoverride metode yang diwariskan.

### **Definisi Kelas Person**
Kelas `Person` adalah kelas dasar (parent class) yang memiliki atribut:
- **$name**: Menyimpan nama orang.

Kelas ini juga memiliki:
- **Constructor**: Untuk menginisialisasi atribut nama saat objek dibuat.
- **Metode getName()**: Untuk mendapatkan nama orang.

### **Definisi Kelas Student**
Kelas `Student` mewarisi dari `Person` dan memiliki atribut tambahan:
- **$studentID**: Menyimpan ID mahasiswa..

Kelas ini juga memiliki:
- **Constructor**: Untuk menginisialisasi nama (menggunakan constructor dari kelas induk) dan ID mahasiswa saat objek dibuat.
- **getStudentID()**: Untuk mendapatkan ID mahasiswa.
- **Override getName()**:Mengubah format tampilan nama dengan menambahkan prefix "Student".

### **Definisi Kelas Teacher**
Kelas `Teacher` juga mewarisi dari `Person` dan memiliki atribut tambahan:
- **$teacherID:**: Menyimpan ID dosen..

Kelas ini juga memiliki:
- **Constructor**: Untuk menginisialisasi nama (menggunakan constructor dari kelas induk) dan ID dosen saat objek dibuat.
- **Metode getTeacherID()**: Untuk mendapatkan ID dosen.
- **Override getName()()**: Override getName(): Mengubah format tampilan nama dengan menambahkan prefix "Teacher".

## Source code

```php
<?php
// Definisi Kelas Person
class Person {
    // Atribut
    protected $name;

    // Constructor
    public function __construct($name) {
        $this->name = $name;
    }

    // Metode untuk mendapatkan nama
    public function getName() {
        return $this->name;
    }
}

// Definisi Kelas Student yang mewarisi dari Person
class Student extends Person {
    // Atribut tambahan
    private $studentID;

    // Constructor
    public function __construct($name, $studentID) {
        // Memanggil constructor dari kelas induk (Person)
        parent::__construct($name);
        $this->studentID = $studentID;
    }

    // Metode untuk mendapatkan studentID
    public function getStudentID() {
        return $this->studentID;
    }

    // Override metode getName() untuk format berbeda
    public function getName() {
        return "Student: " . $this->name;
    }
}

// Definisi Kelas Teacher yang mewarisi dari Person
class Teacher extends Person {
    // Atribut tambahan
    private $teacherID;

    // Constructor
    public function __construct($name, $teacherID) {
        // Memanggil constructor dari kelas induk (Person)
        parent::__construct($name);
        $this->teacherID = $teacherID;
    }

    // Metode untuk mendapatkan teacherID
    public function getTeacherID() {
        return $this->teacherID;
    }

    // Override metode getName() untuk format berbeda
    public function getName() {
        return "Teacher: " . $this->name;
    }
}

// Contoh penggunaan
$student1 = new Student("Muhamad Subhi Adzani", "230202017");
$teacher1 = new Teacher("Riyadi S.T,.M.Eng.", "2374627434");

echo $student1->getName() . "<br>";
echo "Student ID: " . $student1->getStudentID() . "<br>";

echo $teacher1->getName() . "<br>";
echo "Teacher ID: " . $teacher1->getTeacherID();
?>
```

## Output Program
```bash
Student: Muhamad Subhi Adzani
Student ID: 230202017
Teacher: Riyadi S.T,.M.Eng.
Teacher ID: 2374627434
```
# Penjelasan 3. Encapsulation
Proyek ini menampilkan implementasi dasar dari konsep Object-Oriented Programming (OOP) dalam PHP, khususnya tentang penggunaan pewarisan (inheritance), serta metode setter dan getter. Kode ini mencakup dua kelas: `Person` dan `Student`, di mana `Student` mewarisi dari `Person` dan menambahkan metode untuk mengelola atribut `studentID`.

### **Definisi Kelas Person**
Kelas `Person` adalah kelas dasar (parent class) yang memiliki atribut:
- **$name**: Menyimpan nama orang.

Kelas ini juga memiliki:
- **Constructor**: Untuk menginisialisasi atribut nama saat objek dibuat.
- **Metode getName()**: Untuk mendapatkan nama orang.
- **Metode setName()**: Untuk mengubah nama orang.

### **Definisi Kelas Student**
Kelas `Student` mewarisi dari `Person` dan memiliki atribut tambahan:

- **$studentID**: Menyimpan ID mahasiswa, yang bersifat privat (private).
Kelas ini memiliki:

- **Constructor**: Untuk menginisialisasi nama dan ID mahasiswa saat objek dibuat. Constructor ini juga memanggil constructor dari kelas induk (Person).
- **Metode getStudentID()**: Untuk mendapatkan ID mahasiswa.
- **Metode setStudentID()**: Untuk mengubah ID mahasiswa.
- **Override getName()**: Mengubah format tampilan nama dengan menambahkan prefix "Student".


## Source code

```php
<?php
// Definisi Kelas Person
class Person {
    // Atribut
    protected $name;

    // Constructor
    public function __construct($name) {
        $this->name = $name;
    }

    // Metode untuk mendapatkan nama
    public function getName() {
        return $this->name;
    }

    // Metode untuk mengubah nama
    public function setName($name) {
        $this->name = $name;
    }
}

// Definisi Kelas Student yang mewarisi dari Person
class Student extends Person {
    // Atribut yang diubah menjadi private
    private $studentID;

    // Constructor
    public function __construct($name, $studentID) {
        // Memanggil constructor dari kelas induk (Person)
        parent::__construct($name);
        $this->studentID = $studentID;
    }

    // Metode untuk mendapatkan studentID
    public function getStudentID() {
        return $this->studentID;
    }

    // Metode untuk mengubah studentID
    public function setStudentID($studentID) {
        $this->studentID = $studentID;
    }

    // Override metode getName() untuk format berbeda
    public function getName() {
        return "Student: " . $this->name;
    }
}

// Contoh penggunaan
$student1 = new Student("Muhamad Subhi Adzani", "230202017");

// Mengakses nilai atribut menggunakan getter
echo $student1->getName() . "<br>";
echo "Student ID: " . $student1->getStudentID() . "<br>";

// Mengubah nilai atribut menggunakan setter
$student1->setName("Muhammad Bondan Rahardinata");
$student1->setStudentID("230202018");

// Menampilkan data yang telah diperbarui
echo $student1->getName() . "<br>";
echo "Student ID: " . $student1->getStudentID();
?>
```

## Output Program
```bash
Student: Muhamad Subhi Adzani
Student ID: 230202017
Student: Muhammad Bondan Rahardinata
Student ID: 230202018
```
# Penjelasan 4. Abstraction
Proyek ini menampilkan implementasi dari konsep Object-Oriented Programming (OOP) dalam PHP dengan menggunakan kelas abstrak. Kode ini mencakup definisi kelas abstrak `Course` dan dua kelas turunan: `OnlineCourse` dan `OfflineCourse`. Kelas abstrak digunakan untuk menyediakan kerangka umum yang harus diikuti oleh kelas turunannya.

### **Definisi Kelas Abstrak Course**
Kelas `Course` adalah kelas abstrak yang memiliki atribut dan metode berikut:
- **$matakuliah**: Nama mata kuliah.
- **$kode**: Kode mata kuliah.
- **Constructor**: Menginisialisasi atribut umum yang dimiliki oleh semua jenis kursus.
- **Metode abstrak getCourseDetails()**: Metode ini harus diimplementasikan oleh semua kelas turunan untuk menampilkan detail spesifik dari kursus.

### **Definisi Kelas OnlineCourse**
Kelas `OnlineCourse` adalah kelas turunan dari `Course` yang memiliki atribut tambahan dan implementasi metode sebagai berikut:

- **$via**: Platform yang digunakan untuk kursus online (misalnya, Google Meet).
- **Constructor**: Menginisialisasi atribut umum dari kelas `Course` serta atribut khusus untuk kursus online.
- **Implementasi getCourseDetails()**: Mengembalikan detail kursus online yang mencakup nama, kode mata kuliah, dan platform yang digunakan.

### **Definisi Kelas OfflineCourse**
Kelas `OfflineCourse` adalah kelas turunan dari `Course` yang memiliki atribut tambahan dan implementasi metode sebagai berikut:
- **$tempat**: Lokasi tempat kursus offline diadakan (misalnya, laboratorium).
- **Constructor**: Menginisialisasi atribut umum dari kelas `Course` serta atribut khusus untuk kursus offline.
- **Implementasi getCourseDetails()**: Mengembalikan detail kursus offline yang mencakup nama, kode mata kuliah, dan lokasi tempat kursus diadakan.

## Source code

```php
<?php
// Definisi Kelas Abstrak Course
abstract class Course {
    // Atribut umum untuk semua jenis kursus
    protected $matakuliah;
    protected $kode;

    // Constructor
    public function __construct($matakuliah, $kode) {
        $this->matakuliah = $matakuliah;
        $this->kode = $kode;
    }

    // Metode abstrak untuk mendapatkan detail kursus
    abstract public function getCourseDetails();
}

// Definisi Kelas OnlineCourse yang mewarisi dari Course
class OnlineCourse extends Course {
    // Atribut tambahan khusus untuk kursus online
    private $via;

    // Constructor
    public function __construct($matakuliah, $kode, $via) {
        parent::__construct($matakuliah, $kode);
        $this->via = $via;
    }

    // Implementasi metode abstrak getCourseDetails()
    public function getCourseDetails() {
        return "Online Course: {$this->matakuliah} (Kode: {$this->kode}), Via: {$this->via}";
    }
}

// Definisi Kelas OfflineCourse yang mewarisi dari Course
class OfflineCourse extends Course {
    // Atribut tambahan khusus untuk kursus offline
    private $tempat;

    // Constructor
    public function __construct($matakuliah, $kode, $tempat) {
        parent::__construct($matakuliah, $kode);
        $this->tempat = $tempat;
    }

    // Implementasi metode abstrak getCourseDetails()
    public function getCourseDetails() {
        return "Offline Course: {$this->matakuliah} (Kode: {$this->kode}), tempat: {$this->tempat}";
    }
}

// Contoh penggunaan
$onlineCourse = new OnlineCourse("Praktikum Pemrograman WEB", "PWEB", "Google Meet");
$offlineCourse = new OfflineCourse("Struktur Basis Data", "STD", "Lab Cisco, Lamtai 4, Gedung GTIL");

// Menampilkan detail kursus
echo $onlineCourse->getCourseDetails() . "<br>";
echo $offlineCourse->getCourseDetails();
?>
```

## Output Program
```bash
Online Course: Praktikum Pemrograman WEB (Kode: PWEB), Via: Google Meet
Offline Course: Struktur Basis Data (Kode: STD), Tempat: Lab Cisco, Lantai 4, Gedung GTIL
```
## Tugas   
Pada Tugas ini yaitu konsep Pemrograman Berorientasi Objek (OOP) dalam PHP dengan menggunakan kelas, enkapsulasi, pewarisan, dan metode abstrak. Kode ini mendemonstrasikan bagaimana kelas `Person` digunakan sebagai kelas induk untuk `Dosen` dan `Mahasiswa`, serta bagaimana kelas abstrak `Jurnal` digunakan untuk menangani pengajuan jurnal oleh dosen dan mahasiswa.
1. **Pewarisan**
   - Kelas `Dosen` mewarisi dari kelas `Person`. Ini berarti bahwa `Dosen` akan memiliki semua metode dan properti yang ada di `Person`, kecuali jika mereka ditandai sebagai `private`.

2. **Properti dan Metode Baru**
   - **Properti `nidn`**: Ditambahkan untuk menyimpan Nomor Induk Dosen Nasional.
   - **Metode `__construct($name, $nidn)`**: Konstruktor ini memanggil konstruktor dari kelas induk `Person` untuk mengatur nama dan juga mengatur `nidn`.
   - **Metode `getRole()`**: Di-override dari kelas induk `Person` untuk mengembalikan string "Dosen", yang menunjukkan bahwa objek ini adalah seorang dosen.
   - **Metode `getNidn()`**: Mengembalikan nilai dari properti `nidn`.
   - **Metode `setNidn($nidn)`**: Mengatur nilai dari properti `nidn`.

## Struktur Kode

### 1. Kelas Person

Kelas `Person` adalah kelas dasar yang memiliki properti `name` dan metode untuk mendapatkan nama serta peran dari objek tersebut.

```php
class Person {
    protected $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    public function getRole() {
        return "Unknown Role";
    }
}
```
### 2. Kelas Dosen  
Kelas `Dosen` mewarisi dari `Person` dan menambahkan properti `nidn`. Kelas ini juga mengoverride metode `getRole` untuk memberikan peran khusus sebagai dosen.
```php
class Dosen extends Person {
    private $nidn;

    public function __construct($name, $nidn) {
        parent::__construct($name);
        $this->nidn = $nidn;
    }

    public function getRole() {
        return "Dosen";
    }

    public function getNidn() {
        return $this->nidn;
    }

    public function setNidn($nidn) {
        $this->nidn = $nidn;
    }
}
```
### 3. Kelas Mahasiswa
Kelas `Mahasiswa` juga mewarisi dari `Person` dan menambahkan properti `nim`. Metode `getRole` diubah untuk menunjukkan peran sebagai mahasiswa.
```php
class Mahasiswa extends Person {
    private $nim;

    public function __construct($name, $nim) {
        parent::__construct($name);
        $this->nim = $nim;
    }

    public function getRole() {
        return "Mahasiswa";
    }

    public function getNim() {
        return $this->nim;
    }

    public function setNim($nim) {
        $this->nim = $nim;
    }
}
```
### 4. Kelas Abstrak Jurnal  
Kelas `Jurnal` adalah kelas abstrak yang mendefinisikan metode `submit` yang harus diimplementasikan oleh kelas turunannya.

```php
abstract class Jurnal {
    protected $judul;

    public function __construct($judul) {
        $this->judul = $judul;
    }

    abstract public function submit();
}
```
### 5. Kelas jurnalDosen dan JurnalMahasiswa 
Kelas `JurnalDosen` dan `JurnalMahasiswa` adalah kelas turunan dari `Jurnal` yang mengimplementasikan metode `submit` untuk pengajuan jurnal.

```php
class JurnalDosen extends Jurnal {
    public function submit() {
        return "Jurnal Dosen dengan judul '{$this->judul}' telah diajukan.";
    }
}

class JurnalMahasiswa extends Jurnal {
    public function submit() {
        return "Jurnal Mahasiswa dengan judul '{$this->judul}' telah diajukan.";
    }
}
```
## Output Program
```bash
Pak Riyadi adalah Dosen dengan NIDN: 1796352
Subhi adalah Mahasiswa dengan NIM: 230202017
Jurnal Dosen dengan judul 'Penelitian AI' telah diajukan.
Jurnal Mahasiswa dengan judul 'Studi Kasus RPL' telah diajukan.
```

## License
Pull requests are welcome. For major changes, please open an issue first
to discuss what you would like to change.

Please make sure to update tests as appropriate.

[MIT](https://choosealicense.com/licenses/mit/)
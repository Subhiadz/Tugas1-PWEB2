<?php
// Definisi Class Pengguna
class Pengguna {
    protected $nama;

    // Constructor untuk inisialisasi nama
    public function __construct($nama) {
        $this->nama = $nama;
    }

    // Metode aksesFitur() yang akan di-override oleh class turunannya
    public function aksesFitur() {
        return "Pengguna dapat mengakses fitur umum.";
    }

    // Getter untuk nama
    public function getNama() {
        return $this->nama;
    }
}

// Definisi Class Dosen yang mewarisi Class Pengguna
class Dosen extends Pengguna {
    private $mataKuliah;

    // Constructor untuk inisialisasi nama dan mataKuliah
    public function __construct($nama, $mataKuliah) {
        parent::__construct($nama);
        $this->mataKuliah = $mataKuliah;
    }

    // Override metode aksesFitur() khusus untuk Dosen
    public function aksesFitur() {
        return "Dosen dapat mengakses fitur manajemen kelas dan input nilai.";
    }

    // Getter untuk mataKuliah
    public function getMataKuliah() {
        return $this->mataKuliah;
    }
}

// Definisi Class Mahasiswa yang mewarisi Class Pengguna
class Mahasiswa extends Pengguna {
    private $jurusan;

    // Constructor untuk inisialisasi nama dan jurusan
    public function __construct($nama, $jurusan) {
        parent::__construct($nama);
        $this->jurusan = $jurusan;
    }

    // Override metode aksesFitur() khusus untuk Mahasiswa
    public function aksesFitur() {
        return "Mahasiswa dapat mengakses fitur pembelajaran dan melihat nilai.";
    }

    // Getter untuk jurusan
    public function getJurusan() {
        return $this->jurusan;
    }
}

// Instansiasi objek dari class Dosen dan Mahasiswa dengan argumen yang sesuai
$dosen1 = new Dosen("Dr. Budi Santoso", "Pemrograman PHP");
$mahasiswa1 = new Mahasiswa("Muhamad Subhi A", "Komputer dan Bisnis");

// Memanggil metode aksesFitur() dari masing-masing objek
echo "Akses Fitur Dosen: " . $dosen1->aksesFitur() . "<br>";
echo "Nama Dosen: " . $dosen1->getNama() . "<br>";
echo "Mata Kuliah: " . $dosen1->getMataKuliah() . "<br><br>";

echo "Akses Fitur Mahasiswa: " . $mahasiswa1->aksesFitur() . "<br>";
echo "Nama Mahasiswa: " . $mahasiswa1->getNama() . "<br>";
echo "Jurusan: " . $mahasiswa1->getJurusan() . "<br>";
?>

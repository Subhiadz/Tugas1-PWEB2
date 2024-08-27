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

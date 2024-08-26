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
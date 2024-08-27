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
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

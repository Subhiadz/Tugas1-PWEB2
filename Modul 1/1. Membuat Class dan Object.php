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
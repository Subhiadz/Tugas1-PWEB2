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
<?php
// Definisi Class Pengguna
class Pengguna {
    protected $nama;

    // Constructor untuk inisialisasi nama
    public function __construct($nama) {
        $this->nama = $nama;
    }

    // Metode untuk mendapatkan nama
    public function getNama() {
        return $this->nama;
    }
}

// Definisi Class Dosen yang mewarisi Class Pengguna
class Dosen extends Pengguna {
    private $mataKuliah;

    // Constructor untuk inisialisasi nama dan mataKuliah
    public function __construct($nama, $mataKuliah) {
        // Memanggil constructor dari class induk (Pengguna)
        parent::__construct($nama);
        $this->mataKuliah = $mataKuliah;
    }

    // Metode untuk mendapatkan mataKuliah
    public function getMataKuliah() {
        return $this->mataKuliah;
    }

    // Metode untuk menampilkan informasi Dosen
    public function tampilkanDataDosen() {
        return "Nama Dosen: " . $this->getNama() . "<br>Mata Kuliah: " . $this->getMataKuliah();
    }
}

// Instansiasi objek dari class Dosen
$dosen1 = new Dosen("Riyadi S.T,.M.Eng.", "Sistem Instalasi Mobile");

// Menampilkan data dosen
echo $dosen1->tampilkanDataDosen();
?>
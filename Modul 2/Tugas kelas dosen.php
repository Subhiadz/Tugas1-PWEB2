<?php
// Definisi Dosen
class Dosen {
// Atribut atau Properties
    public $nama;
    public $nip;
    public $matakuliah;

    // Constructor
    public function __construct($nama, $nip, $matakuliah) {
    $this->nama = $nama;
    $this->nip = $nip;
    $this->matakuliah = $matakuliah;
    }
    // Metode atau Function
    public function tampilkanData() {
        return "Dosen ini bernama $this->nama dengan nip: $this->nip mengajar matakuliah $this->matakuliah. pada semester 3";
    }
}
// Instansiasi Objek
$dosen1 = new Dosen("Riyadi S.T,.M.Eng.", "2374627434", "SIM");
echo $dosen1->tampilkanData();
?>
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
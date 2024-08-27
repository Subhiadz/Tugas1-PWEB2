<?php
// Definisi Kelas Person
class Person {
    // Atribut
    protected $name;

    // Constructor
    public function __construct($name) {
        $this->name = $name;
    }

    // Metode untuk mendapatkan nama
    public function getName() {
        return $this->name;
    }

    // Metode untuk mengubah nama
    public function setName($name) {
        $this->name = $name;
    }
}

// Definisi Kelas Student yang mewarisi dari Person
class Student extends Person {
    // Atribut yang diubah menjadi private
    private $studentID;

    // Constructor
    public function __construct($name, $studentID) {
        // Memanggil constructor dari kelas induk (Person)
        parent::__construct($name);
        $this->studentID = $studentID;
    }

    // Metode untuk mendapatkan studentID
    public function getStudentID() {
        return $this->studentID;
    }

    // Metode untuk mengubah studentID
    public function setStudentID($studentID) {
        $this->studentID = $studentID;
    }

    // Override metode getName() untuk format berbeda
    public function getName() {
        return "Student: " . $this->name;
    }
}

// Contoh penggunaan
$student1 = new Student("Muhamad Subhi Adzani", "230202017");

// Mengakses nilai atribut menggunakan getter
echo $student1->getName() . "<br>";
echo "Student ID: " . $student1->getStudentID() . "<br>";

// Mengubah nilai atribut menggunakan setter
$student1->setName("Muhammad Bondan Rahardinata");
$student1->setStudentID("230202018");

// Menampilkan data yang telah diperbarui
echo $student1->getName() . "<br>";
echo "Student ID: " . $student1->getStudentID();
?>

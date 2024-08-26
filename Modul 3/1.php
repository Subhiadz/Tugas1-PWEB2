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
}

// Definisi Kelas Student yang mewarisi dari Person
class Student extends Person {
    // Atribut tambahan
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
}

// Contoh penggunaan
$student1 = new Student("Muhamad Subhi Adzani", "23020201");
echo "Name: " . $student1->getName() . "<br>";
echo "Student ID: " . $student1->getStudentID();
?>

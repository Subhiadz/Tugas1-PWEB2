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

    // Override metode getName() untuk format berbeda
    public function getName() {
        return "Student: " . $this->name;
    }
}

// Definisi Kelas Teacher yang mewarisi dari Person
class Teacher extends Person {
    // Atribut tambahan
    private $teacherID;

    // Constructor
    public function __construct($name, $teacherID) {
        // Memanggil constructor dari kelas induk (Person)
        parent::__construct($name);
        $this->teacherID = $teacherID;
    }

    // Metode untuk mendapatkan teacherID
    public function getTeacherID() {
        return $this->teacherID;
    }

    // Override metode getName() untuk format berbeda
    public function getName() {
        return "Teacher: " . $this->name;
    }
}

// Contoh penggunaan
$student1 = new Student("Muhamad Subhi Adzani", "230202017");
$teacher1 = new Teacher("Riyadi S.T,.M.Eng.", "2374627434");

echo $student1->getName() . "<br>";
echo "Student ID: " . $student1->getStudentID() . "<br>";

echo $teacher1->getName() . "<br>";
echo "Teacher ID: " . $teacher1->getTeacherID();
?>
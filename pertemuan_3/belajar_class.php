<?php

    require './belajar_function.php';


    class User {
        public $name;
        private $gender = "None";

        // method adalah fungsi yg ada di dalam kelas
        public function setGender($gender_name) {
            $this->gender = $gender_name;
        }
        public function getGender() {
            printNumB();
            return $this->gender;
        }

    }


$firman = new User;
$firman->name = "Rahmad Firmansyah";
$firman->setGender("Male");
$firman->getGender();

?>

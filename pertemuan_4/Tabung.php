<?php


    class Tabung {
        private $diameter;
        private $tinggi;
        private $r;
        private $luas_selimut = 0;
        private $phi = 3.14;


        // public function __construct($d, $t) {
        //     $this->diameter = $d;
        //     $this->tinggi = $t;
        // }
        public function setDiameter($value) {
            $this->diameter = $value;
            $this->r = $this->diameter / 2;
        }
        public function setTinggi($value) {
            $this->tinggi = $value;
        }
        public function getLuasSelimut() {
            return $this->luas_selimut = 3.14 * $this->diameter * $this->tinggi;
        }

        public function tes() {
            echo 'class tabung berhasil dipanggil';
        }

    } 


?>
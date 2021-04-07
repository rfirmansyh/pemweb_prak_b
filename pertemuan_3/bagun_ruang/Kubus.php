<?php
    class Kubus {
        private $sisi;

        public function setSisi($option) {
            $this->sisi = $option;
        }
        public function getSisi() {
            return $this->sisi;
        }
        public function getLuas() {
            $luas = 0;
            $luas = 6 * pow($this->sisi, 2);
            return $luas;
        }
        public function getVolume() {
            $volume = 0;
            $volume = $this->sisi * $this->sisi * $this->sisi;
            return $volume;
        }
    } 


?>


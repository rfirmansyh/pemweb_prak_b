<?php
    
    // apa itu kelas/class ?
    // template dari sebuah object

    // cara membuat class di php ?
    class User {

        public $name;
        public $age;
        public $gender;

        // berkenalan dengan method
        public function save() {
            echo "User $this->name Already Saved ! <br/><hr/>";
            echo "
                <b>Detail User :</b> <br/>
                Name : $this->name <br/>
                Age : $this->age <br/>
                Gender : $this->gender";
        }


    }

    $user = new User;
    $user->name = "Rahmad Firmansyah";
    $user->age = "21";
    $user->gender = "Male";

    $user->save();


?>
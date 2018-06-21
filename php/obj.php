<?php
class Animal {
    
    
    protected $name;
    protected $favorite_food;
    protected $sound;
    protected $id;

    public static $number_of_animals = 0;
    //Animal :: $number_of_animals;

    const PI = "3.14159";

    function getName(){
        return $this -> name;
    }

    function __construct(){
        $this -> id = rand(100, 10000000);
        echo $this -> id . " has been assigned<br />";

        Animal :: $number_of_animals++;
    
    }

    function __destruct(){
        echo $this -> name . " is gone<br />";               
    }

    function __get($name) {
        echo "Asked for " . $name . "<br />";

        return $this ->$name;
    }

    function __set ($name, $value){

        switch($name){
            case "name":
                $this -> name = $value;
                break;
            case "favorite_food":
                $this -> favorite_food = $value;
                break;
            case "sound":
                $this -> sound = $value;
                break;
            default :
                echo $name . "not found";
        }

            echo "Set " . $name . " to " . $value. "<br />";
        }

        function run() {
            echo $this -> name . " runs<br />";
        }

        final function what_is_good(){
            echo "Can't change me";
        }


    }

class Dog extends Animal {

     function run() {
            echo $this -> name . " runs like crazy<br />";
        }


}




?>

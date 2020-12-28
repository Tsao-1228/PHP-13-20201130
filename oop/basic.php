<?php
    class Human {
        //建構子
        function __construct(){
            echo  "HUMAN!!!!";
        }

        public $skin;
        //private 只能在類別內使用，且不被繼承
        private $gender = "unknown";
         //protected 只能在類別內使用，可被繼承
        protected $name = "John";
        
        function walk(){
            return $this->name." walk";
        }
        function run(){
            return $this->name." run";
        }
        function attack(){
            return "attack";
        }
        function eat(){
            return $this->gender;
        }
        function sleep(){
            return "sleep";
        }
    }
    //建立實體

    $john = new Human;
    // echo $john->name;
    // var_dump($john);
    // $john->name = "John Wick";
    // echo $john->run();
    // echo $john->eat();
    // echo $john->gender;

    // $mary = new Human;
    // echo $mary->gender = "female";
    // echo $mary->sleep();

    // $ben = new Human;
    // echo $ben->skin = "black";
    // echo $ben->eat();
    
    class Male extends Human {
        public $gender = "male";
    }
    // $jay = new Male;
    // echo $jay->sleep();
    // echo $jay->gender;
    
    class Female extends Human {
        public $gender = "female";
        function hello(){
            return $this->name . " Hello!!!";
        }
    }
    $katrina = new Female;
    // echo $katrina->name;
    echo $katrina->hello();
    // echo $katrina->gender;
    // echo $katrina->walk();

    class Kids extends Male {

    }
    // $a = new Kids; 


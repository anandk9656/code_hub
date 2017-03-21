<?php
    include 'head.html';
    echo"<h1> <----: <i> Inheritance in php </i> :----> </h1>";
    class vehicle
    {
        public $color,$model;
//        public function show()
//        {
//            echo "<h2> This is vehicle class i.e. Parent Class</h2>";
//            echo"It includes color and model ";
//       
//        }
        function display()
        {
            echo"<h3> Vehicle class </h3>";
        }
    }
    class santro extends vehicle
    {
        public $number,$owner_name;
        function display()
        {
            echo"<h2>This is santro class i.e.s child of vehicle class </h2>";
            echo "Color is :  ". $this->color;
            echo"<br>";
            echo "Model is :  ". $this->model;
            echo"<br>";
            echo "number is :  ". $this->number;
            echo"<br>";
            echo "Owner_Name is :  ".$this->owner_name;
        }
        function dis()
        {
            parent::display();
        }
    }
   
  //  $v1=new vehicle;
    $s1=new santro;
    $s1->color="Silver"; 
    $s1->model=2016;
    $s1->number="DL-4CH 9656";
    $s1->owner_name="Anand_Kumar";
  //  $v1->show();
    $s1->display(); 
    $s1->dis();
?>


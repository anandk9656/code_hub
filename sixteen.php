<?php
include 'head.html';
    echo"<h1> <----: Classes & Objects in php programming :---> </h1> ";
    class student
    {
        public $name = 'Anand', $roll_no = 35, $marks = 76;
        function show()
        {
            echo "<h2>This is student class </h2>";
        }
        function put_info()
        {
            echo $this->name;    echo "<br>";
            echo $this->roll_no; echo "<br>";
            echo $this->marks;   echo "<br>";
        }
    }
    
    $stud1=new student;
    $stud1->show();
    $stud1->put_info();
    echo"<br>";
    
    class book
    {
        public $title,$no_page;
        function show()
        {
            echo "<h2>This is book class </h2>";
        }
    }
    $b1=new book;
    
    $b1->show();
    
    $b1->title="Mastering c++";
    $b1->no_page=354;
    
    $b2= clone $b1;   
    
    $b2->title="Html and Css ";
    $b2->no_page=590;
    
    echo $b1->title;   
    echo "<br>";
    echo $b2->title;
    
     echo"<br>";
     
    class university
    {
        public $clg_name,$clg_fees,$clg_duration;
        function show()
        {
            echo "<h2>This is university class </h2>";
        }
        function get()
        {
            $this->clg_name="MAIT";
            $this->clg_fees=96750;
            $this->clg_duration=4;
        }
        function put()
        {
            echo $this->clg_name;      echo "<br>";
            echo $this->clg_fees;      echo "<br>";
            echo $this->clg_duration;  echo "<br>";
        }
    }
    $u1=new university('clg_name','clg_duration');
    $u1->show();
    $u1->get();
    $u1->put();
    echo"<br>";
    echo "Your College Name is : ".$u1->clg_name; 
    
    echo"<br>";
    
    include 'foot.html';
<?php
include 'head.html';
echo "<h1> <----:Form Handling in php :----> </h1>";
if(isset($_POST['uname'])) 
    {
        $n = $_POST['uname'];
    }
    echo"If you enter any name then it will be displayed."."<br> <br>";
    echo"If not enter any name then error wil be shown.";
?>
   
    <html> 
        <head> <title> Form Handling </title> </head>
    <body>
        <form method="post" action="twentyfive.php">
            <pre>
            Name: <input type="text" name ="uname" placeholder="enter name"> <br /> <br />
          
            <input type="submit" value="print"> <br /> <br />
            Name : <br>
            <?php if(!empty($n)) 
                   { 
                        echo $n; 
                   }
                   else
                   {
                       echo" !!!! error error error ";
                   }     
            ?> 
            </pre>
        </form>
    </body>
   </html>



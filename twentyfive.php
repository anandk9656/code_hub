<?php
include 'head.html';
echo "<h1>Form Handling in php</h1>";
    echo"If you enter any name then it will be displayed."."<br>";
    echo"If not enter any name then error wil be shown.";
?>
<html> 
        <head> <title> Form Handling </title> </head>
    <body>
        <form method="post" action=<?php $_SERVER['PHP_SELF']?>>
            <pre>
            Name: <input type="text" name ="uname" placeholder="Enter name"> <br />
            <input type="submit" value="print" name="done"> <br />
            <?php
            if(isset($_POST['done'])) {
            if(!empty($_POST['uname'])){ 
                      echo "Name you have entered is : ".$_POST['uname']; 
            }else{
                    echo 'Enter name first then try to print';  
                 }   
            }
            ?> 
            </pre>
        </form>
    </body>
</html> <?php include 'foot.html';

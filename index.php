<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
    <!-- Array -->
    
    <?php
    $numbers = array(0,1,2,3,4);
    unset($numbers[2]);
    var_dump($numbers);
    ?>
    <br />
    <?php 
    $color = array("key1"=>"Blue","key2"=>"Red","key3"=>"Green");
    unset($color["key2"]);
    var_dump($color);
   
    
    ?>
<br />
    <!-- Loops -->
    <?php	
    for ($i=1; $i<=5; $i++)	
    {	 
    for($j=1;$j<=$i;$j++)	  
    {	  	
    echo " * ";	 
    }	  	 
    echo "<br/>";   	
}  
?> 
<br />
</body>
</html>
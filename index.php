<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array&Loops</title>
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

<?php
$arr = array('Hello','Have','a','Good','day!');
echo implode(" ",$arr);
?>
<br />
<?php
$str = "Hello It's a beautiful day.";
print_r (explode(" ",$str));
?>

<br />
<?php
$array = array(1, 2, 2, 3);
$array = array_unique($array); 
print_r ($array);
?>
<script>
  var myArray = ['a', 1, 'a', 2, '1'];

let unique = [...new Set(myArray)];

console.log(unique);
 
</script>
</body>
</html>
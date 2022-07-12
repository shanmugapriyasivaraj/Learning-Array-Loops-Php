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

  
<script src="https://code.jquery.com/jquery-3.5.0.js"></script>
<!-- .append() -->
<p>I would like to say: </p>
 
<script>
$( "p" ).append( "Hello" );
</script>

<!-- .html() -->
<p>Hello</p>
<div></div>
<div></div>
<div></div>
 
 <script>
$( "div" ).html( "Hello" );
</script>
<p>Test Paragraph.</p>
 
<script>
$( "p" ).text( "new text" );
</script>
<input type="text" id="text1" value="..." />
<button id="button1">Set value</button>
  <script>
    $("#button1").click(function (e) {
    $("#text1").val("Hi");
});
  </script>

<p><a href="https://www.google.com/" id="google">Google</a></p>
<button>Change href Value</button>
<script>
$(document).ready(function(){
  $("button").click(function(){
    $("#google").attr("href", "https://flipkart.com");
  });
});
</script>
</body>
</html>
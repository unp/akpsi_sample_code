<html>
<body>
<?php
/*
//Strings
  $var = "Hello";
  $n = "2";
  echo '<p>Content here... "blah" blah blah</p>';
  //echo $var . " World " . $n . "!";
  echo "{$var} World {$n}!";


// Loops

$n = 10;
while($n > 0)
{
  echo $n . '<br>';
  $n--;
}

for($i = 10; $i > 0; $i--)
{
  echo $i . '<br>';
}
*/
//Arrays
$arr = array("first" => 1, "second"=> 2, "third"=> 3);
//echo $arr["second"];
//unset($arr["first"]);

foreach($arr as $item)
{
  echo $item . '<br>';
}

/*
if(empty($arr["first"]))
{
  echo "empty";
}
else
{
  echo $arr["first"];
}
*/
?>
</body>
</html>
<!-- This is an HTML comment -->
<html>
<body>
<!-- PHP code blocks can be inserted within HTML by using the <?php ?> tags -->
<?php

/*--------------- Commenting ---------------*/
  
  //This is an inline comment
  
  /*This is a
  multiple line
  comment*/
  
/*--------------- Variables ---------------*/

  // PHP is loosely typed - you don't need to declare data type when creating a variable
  // All variables start with $
  
  $var = "Hello"; //This is a String
  $n = "1"; //This is an Integer

/*--------------- Strings ---------------*/

  //use echo language construct to output a string//
  $notOutput = 'This string will not be printed';
  $output = "This string will be printed.<br>";
  echo $output;
  
  //Single vs. Double Quotes//

  $str = "some text";
  //use single quotes when printing literal text
  echo 'This is the output of $str<br>';
  echo 'You can print a string that contains "double quotes"<br>';
  //use double quotes when evaluating variables within a string (simple syntax)
  echo "This is the output of $str<br>";
  echo "You can print a string that contains 'single quotes'<br>";
  //if evaluating complex expressions within string, enclose expression in {}
  echo "$string<br>"; //would output nothing, since $string is an undefined String.
  echo "${str}ing<br>"; //Here, {} are necessary, since simple syntax parser is greedy
  
  //Concatenation//
  
  // use '.' to concatenate two strings
  echo $var . ' World ' . $n . '!<br>';
  //can append to a string using .= concatenation assignment operator
  echo $var .= " World - Using .= operator<br>";

/*--------------- Conditionals ---------------*/

$n = 5;//change this value to see results

if($n < 5)
{
  echo "$n is less than five<br>";
}
elseif($maybe > 5)
{
  echo "$n is greater than five<br>";
}
else
{
  echo "$n equals five<br>";
}

/*--------------- Arrays ---------------*/

// Setting an array
$arr = array("first" => 1, "second"=> 2, "third"=> 3); //using key/value pairs
$arr2 = array("one", "two", "three"); //using just values (automatically indexed, starting at 0)
print_r($arr); //prints value of variable (usually for debugging)
//echo $arr["second"];
//unset($arr["first"]);


/*--------------- Loops ---------------*/

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

foreach($arr as $item)
{
  echo $item . '<br>';
}


?>
</body>
</html>
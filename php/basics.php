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

  // Setting an Array//
  $arr = array("first" => 1, "second"=> 2, "third"=> 3); //using key/value pairs
  $arr2 = array("zero", "one", "two"); //using just values (automatically indexed, starting at 0)

  //Accessing Elements//
  $arr["second"]; //gets value of element with key "second"
  $arr2[2]; //gets value of element with index 2
  
  //Adding Elements//
  $arr["fourth"] = 4; //adding key/value pair
  $arr2[] = "three"; //push element - adding to end of array
  print_r($arr); //prints value of variable (usually for debugging)
  
  //Removing Elements//
  unset($arr["first"]); //removes element with key "first"
  unset($arr2[3]); //removes element at index 3

  //Sorting//
  ksort($arr); //sorts Array by keys
  sort($arr2); //sorts Array by values
  print_r($arr);
  print_r($arr2);

/*--------------- Loops ---------------*/

  //While Loops//

  echo "<h2>Counting down from 10 using While Loop</h2>";
  $n = 10;
  while($n > 0)
  {
    echo $n . '<br>';
    $n--;
  }
  
  //For Loops//
  
  echo "<h2>Counting down from 10 using For Loop</h2>";
  for($i = 10; $i > 0; $i--)
  {
    echo $i . '<br>';
  }

  //Iterating through an array using Foreach loops//
  
  echo "<h2>Contents of array:</h2>";
  sort($arr);
  
  foreach($arr as $item)
  {
    echo $item . '<br>';
  }
  
?>
</body>
</html>
<?php
//Function
function writeMsg() 
{
  echo "Hello world!.<br>";
}
writeMsg();

/*Function With Argument*/
function familyName($fname) 
{
  echo "$fname FirstName.<br>";
}

familyName("Jani");
familyName("Hege");
familyName("Stale");
familyName("Kai Jim");
familyName("Borge");

//Function With Multiple Arguments
function familyName1($fname, $year) 
{
  echo "$fname Refsnes. Born in $year <br>";
}

familyName1("Hege", "1975");
familyName1("Stale", "1978");
familyName1("Kai Jim", "1983");

//With Argument And Return Value
function addNumbers($a,$b)
{
  return $a + $b;
}
echo addNumbers(5, 5);
?>

<?php
// 1- difference between echo and print
// The differences are small: echo has no return value while print has a return value of 1 so it can be used in expressions. echo can take multiple parameters (although such usage is rare) while print can take one argument. echo is marginally faster than print.
//Examples ::
//echo print'hello';  // output = hello1
//print echo'hello';  // output = Parse error: syntax error, unexpected 'echo' (T_ECHO)

//2- Strings

//echo strlen('Pakistan is'); // 11
//echo '<br>';
//echo str_word_count('Pakistan is'); // 2
//echo '<br>';
//echo strrev('Pakistan is'); // si natsikaP
//echo '<br>';
//echo strpos('Pakistan is Best Country in world', 'Best'); // 12 return position in the string
//echo '<br>';
//echo str_replace('India', 'USA', 'India In the Country'); // USA In the Country

//3- PHP Constants and Difine Difference
//Use of const is always a good habit. Because while using const we can control its scope. If it is placed inside any user define function, its effect would be localized to the function and if it is placed outside all user define functions then it becomes global to all files.
//define('API_KEY', 'This is a key'); echo API_KEY; // This is a key
//const API_KEY_2 = 'This is a key 2'; echo API_KEY_2; // This is a key 2

//4- PHP Operators
//==, ===, !=, <>, <=>
// !=, <> same result

//5- if, else, switch, loops

// 6- Break Continue statements

// 7- Array

//types of array
// (i) Indexed Array
//$cars = array("Volvo", "BMW", "Toyota");
// (ii) Associative Arrays
//$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
// (iii) PHP Multidimensional Arrays
//$cars = array (array("Volvo",22,18),array("BMW",15,13),array("Saab",5,2),array("Land Rover",17,15));
//Difference between associative and indexed array
//The index can be assigned automatically (index always starts at 0) and associative array define indexes

// 8- PHP - Sort Functions For Arrays
// i- sort() sort in ascending order
// ii- rsort() sort in descending order
// ii- asort() sort associative array into ascending order  according to the value
// ii- ksort() sort associative arrays in ascending order, according to the key
// ii- arsort() sort associative arrays in descending order, according to the value
// ii- krsort()  sort associative arrays in descending order, according to the key

// 9- PHP Global Variables - Superglobals
// $GLOBALS, $_SERVER, $_REQUEST, $_POST, $_GET, $_FILES, $_ENV, $_COOKIE, $_SESSION

// 10- What is a Regular Expression?
// A regular expression is a sequence of characters that forms a search pattern. When you search for data in a text, you can use this search pattern to describe what you are searching for.
//preg_match()	Returns 1 if the pattern was found in the string and 0 if not
//preg_match_all()	Returns the number of times the pattern was found in the string, which may also be 0
//preg_replace()	Returns a new string where matched patterns have been replaced with another string
<?php echo "hello, world!";
//closing is optional if it's the end of the file
//capitalizations on functions don't matter

//Variable names start iwth dollar signs
// Variables cannot start with numbers or special characters.
// You need to check 
$firstVariable = "\nhello world\n";
echo $firstVariable;

$literalVariable = '\nThis doesnt interpret the new line character';

echo "\n\n This is the difference between double quotes and single quotes. Double quotes allows you to run an interpreter in there. \n $firstVariable and \n $literalVariable";


echo "\n \n this is how you " . 'concatenate a string!';
echo "\n \n this solves the issue of having an overloaded value because";

// Data types

$strings1 = 'I\'m a string';
$strings2 = "double quote strings";

//ints
$int1 = 35;
$int2 = 0;
$int3 = -24;

// Floats
$floats1 = 3.14;
$floats2 = -1.62;

//Booleans
$bool1 = true;
$bool2 = False;

// Arrays
$array1 = ['First value', 17, 16.78, false]; // the data type doesn't matter
$array2 = array('First value', 17, 16.78, false);

//to output 17
echo $array1[1];

// Associative array 
$array3 = array(
    'key' => 'value',
    'name' => 'George', 
    'age' => 36
);

//to output name
echo $array3['name'];

// Objects

$object = new stdClass();
$object->name = 'TECHCareers';
$object->cohort = 4.2;
$object->year = 2020;

echo "\n\n\n $object->name $object->cohort $object->year" . "hello lol";

//Null data types

$nullVariable = NULL; //case insensitive but usually typed in all caps

//When it says unexpected it usually means the error was before the red line
//Loops

for ( $i = 0; $i < 10; $i++ ) {
    echo "\n\n\n Our for loop is on iteration: $i";
}

?>
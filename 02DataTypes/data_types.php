<?php

/* DATA TYPES */

# BOOLEANS

// $isComplete = [];

// integers 0 -0 = false
// floats 0.0 -0.0 = false
// '' = false
// '0' = false
// [] = false
// [0] = true
// null = false


// var_dump(is_bool($isComplete));

// if ($isComplete) {
//     # code...
//     echo 'success';
// } else {
//     # code...
//     echo 'fail';
// }

# INTEGER

// $a = 12;
// $b = (int) 1;
// $b = (integer) '45sdfsdg';
// $c = (int) 2_000_000;

// var_dump($a);
// var_dump($b);
// var_dump($c);

# FLOAT

// $a = 5.5;
// $b = (float) 5;

// var_dump($a);
// var_dump($b);

#STRINGS

// $firstName = 'Vusala';
// $lastName = 'Salimova';

// $name = $firstName . ' ' . $lastName;

// echo $name . ' <br /> ';
// echo $name;
// echo PHP_EOL;
// echo $name[1];
// echo $name[-3];
// var_dump($name);
// $name[20] = 'G';
// var_dump($name);

#NULL

// $x = null;
// $y = 123;
// unset($y);
// $g = (int) null;
// $g = (bool) null;
// $g = (string) null;
// $g = (array) null;

// var_dump($x);
// var_dump(is_null($y));
// var_dump($g);

// ARRAYS

// $programmingLanguages = ['PHP','Java','Python'];

// $programmingLanguages[0] = 'Javascript';

// var_dump($programmingLanguages);
// print_r ($programmingLanguages);
// echo $programmingLanguages[2];
// echo $programmingLanguages[5];
// echo $programmingLanguages[-2];
// var_dump(isset($programmingLanguages[2]));
// echo count($programmingLanguages);

// $programmingLanguages[5] = 'Go';


// $programmingLanguages[] = 'C++';

// print_r($programmingLanguages);
// echo count($programmingLanguages); 

// array_push($programmingLanguages, 'C++', 'Assembly', 'C#');


// print_r($programmingLanguages);


// $programmingLanguages = [
//     'php' => '8.5',
//     'python' => '3.14.2'
// ];

// echo $programmingLanguages['python'];

// $newLang = 'Go';

// $programmingLanguages['Go'] = '1.25.5';
// $programmingLanguages[$newLang] = '1.25.5';

// print_r ($programmingLanguages);


// $array = [
//     0 => 'men',
//     1 => 'sen',
//     '1' => 'o',
//     1.5 => 'biz'
// ];


// $array = ['a', 'b', 13 => 'c', 'd', 'e'];

// echo array_pop($array);
// echo array_shift($array);
// echo PHP_EOL;
// unset($array);
// unset($array[1], $array[2]);
// print_r($array);

// $x = 5;

// print_r((array) $x);

// $array = [ 'a' => 1, 'b' => null];

// var_dump(array_key_exists('b', $array));
// var_dump(isset($array['b']));

$a = 5;

echo $a;
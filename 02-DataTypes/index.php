<?php

/**
 * is_{tip_adi}
 * 
 * array_is_list(deyer)
 * 
 * is_string(deyer)
 * is_object(deyer)
 * is_array(deyer)
 * is_double(deyer)
 * is_float(deyer)
 * is_integer
 * is_null(deyer)
 * is_numeric(deyer)
 * 
 * boolean
 * float / double
 * string
 * object
 * array
 * integer
 * null
 * 
 * callable
 * resource
 */

// $a = 10;
// $stronger_string = 'ilk data\n $a';
// echo 'ikinci data';
// echo $stronger_string;

// $lower_string = "ucuncu data {$a} \n";
// echo $lower_string;
// echo "4-cu data";

// echo PHP_EOL;
// $metn = "men hazirda \"php\" oyrenirem";

// echo $metn;

// $city = "Baku";
// $city[3] = "i";

// echo $city;

$user = new stdClass;

$user->name = 'John';
$user->surname = 'Doe';

// echo $user->name;
// echo $user->surname;

// print_r( $user );
// var_dump( $user );
// var_dump( $user->name );

// print_r( $user->name );

// echo $user;

// dd();

// var_dump( is_object( $user ) );

$cars = ['lada', 'bmw', 'mercedes', 'audi'];
$data = array('lada', 'bmw');

$user_data = array(
    'name' => 'John',
    'surname' => 'Doe'
);

$user = [
    'name' => 'John',
    'surname' => 'Doe'
];
// {
//     name: ''
// }
// print_r($cars);
// print_r($user);
// print_r($data);
// print_r($user_data);

// function hesabla($a, $b) {

// }

// hesabla(b: 1, a: 2);

// var_dump( is_array($cars) );
// var_dump( is_array($user) );

// var_dump( array_is_list($user) );

// echo $cars[0];
// echo $user['name'];

$auth = false;

var_dump( is_bool($auth) );

$pi = 3.14;

var_dump( gettype( $pi ) );
var_dump( is_double($pi) );
var_dump( gettype($pi) === "double" );

$tam_say = 10;

var_dump( gettype( $tam_say ) );
var_dump( is_integer($tam_say) );

$null_data = null;

var_dump( is_null($null_data) );

$say = 10;

$say = (string) $say;

// (type) deyer

// var_dump( $say );

// $bos_massiv = (bool) [0];

// var_dump( $bos_massiv );

// $sifir = (bool) 0.00000000001;

// var_dump( $sifir );

// $saylar = [];

// if ( $saylar ) {
//     echo "+++";
// }

$input = "10";

if ( is_numeric($input) ) {
    $input = (int) $input;
} else {
    echo "--";
}

var_dump( $input );

var_dump( (int) "on" );

$user = (object) $user;
var_dump( $user );
var_dump( $user->name );

$emin = "20";

settype($emin, "integer");

var_dump( $emin );
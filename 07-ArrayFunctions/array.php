<?php

/**
 * Massiv Funksiyalari
 * 
 * count()
 * array_is_list()
 * list()
 * extract()
 * isset()
 * array_key_exists()
 * array_keys()
 * array_values()
 * array_combine()
 * array_unique()
 */

var_dump( count([1, 2, 3]) );

$saylar = [1, 2, 3];

var_dump( array_is_list( $saylar ) );

// var a, b = [];

list($a, $b, $c) = $saylar;

echo $a;


$user = [
    'name' => 'John',
    'surname' => 'Doe'
];

// var_dump( $user['name'] );

# ? runtime
extract( $user );
echo $name;

var_dump( isset($saylar[$user['age']]) );

var_dump( array_key_exists('age', $user) );

echo $user['name'] ?? 'none';

var_dump( array_keys( $user ) );
var_dump( array_values($user) );


$fields = ['name', 'surname'];
$values = ['Jane', 'Doe'];

$account = array_combine( $fields, $values );

var_dump( $account );

$info = [
    'name' => '....'
];

$info['name'] = '???';

$u = [1, 1, 2, 3, 4, 5, 5];

var_dump( array_unique($u) );
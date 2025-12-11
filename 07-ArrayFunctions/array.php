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


/**
 * array_filter
 * array_map
 * array_sum
 * array_search
 * in_array
 * end
 * 
 * array_shift
 * array_unshift
 * array_pop
 * array_push
 * array_slice
 * array_splice
 */


$saylar = [10, 20];

var_dump( array_sum($saylar) );

var_dump( end($saylar) );

$user = [
    'name' => 'John',
    'surname' => "Doe"
];

$user['age'] = 50;

var_dump( end($user) );

$a = [];

$a[] = 1;
$a[] = 2;

var_dump( in_array('name', array_keys($user)) );

var_dump( array_search('age', array_keys($user)) );

$users = [
    [
        'id' => 1,
        'first_name' => 'John',
        'last_name' => 'Doe'
    ],
    [
        'id' => 2,
        'first_name' => 'Jane',
        'last_name' => 'Doe'
    ],
    [
        'id' => 3,
        'first_name' => 'Eltun',
        'last_name' => 'Mamedov'
    ]
];

$mapped_users = array_map(function($item) {
    return [
        'id' => $item['id'],
        'firstName' => $item['first_name'],
        // 'lastName' => $item['last_name']
    ];
}, $users);

print_r( $mapped_users );

$filtered_users = array_filter($users, function($item) {
    return $item['first_name'][0] === 'J';
});

print_r( $filtered_users );

// UserController.php


$data = ['lada', 'volga', 'chaika', 'bmw', 'audi', 'mercedes'];

$ilk = array_shift( $data );
echo $ilk;
print_r( $data );

array_unshift($data, "byd");

print_r( $data );

$son = array_pop($data);

echo $son;
print_r( $data );

array_push( $data, 'volvo' );

print_r( $data );
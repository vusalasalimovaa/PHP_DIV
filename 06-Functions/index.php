<?php

/**
 * func_get_args()
 * is_callable()
 * 
 * return, yield
 */

// array(1, 2, 3, 4);

function hesabla($a, $b)
{
    return $a + $b;
}

var_dump( hesabla(2, 2) );

/**
 * Title
 * 
 * desc
 * 
 * @param int $a desc
 * @param int $b desc
 * 
 * @return int
 */
function hesabla2(int $a , int $b): int {
    return $a + $b;
}

var_dump( hesabla2(4, 4) );

// mixed
function hesabla3(int|float $a, int|float $b): int|float
{
    return $a + $b;
}


var_dump( hesabla3(7.2, 8.1) );

// class User {}

// function get_user(): User
// {
//     return new User();
// }

// $users = [
//     [
//         'id' => 1,
//         'name' => 'John'
//     ],
//     [
//         'id' => 2,
//         'name' => 'Jane'
//     ]
// ];


// function find_user_by_id(array $data, int $id): ?array
// {
//     $result = null;

//     foreach ( $data as $item ) {
//         if ( $item['id'] === $id ) {
//             $result = $item;

//             break;
//         }
//     }

//     return $result;
// }

// var_dump( find_user_by_id(id: 2, data: $users) );

// function hesabla4(...$args)
// {
//     print_r( $args );
// }

// hesabla4(10, 20);

// function hesabla5() {

//     print_r(func_get_args());

// }
// hesabla5(3,4,6,7,8);

// $salamDe = function(string $text): void {

//     echo $text;

//     return;
// };

// $salamDe("salam");

// $topla = include 'topla.php';

// var_dump( $topla(1, 2) );


// function get(string $path, callable|string $callback)
// {
//     if ( $path == '/users' ) {
//         if ( is_callable($callback) ) {
//             return $callback();
//         }
//     }
// }

// get('/users', function() {
//     echo 'gunel';
// });

// [UserController::class, 'index']

// collection('User', '/users', UserCollection::class);

// class User {}

// new User();

// var_dump( class_exists(User::class) );

// var_dump( User::class );



/**
 * arrow function
 * 
 * yield
 */


function saylar(): iterable {

    for ( $i = 1; $i <= 20; $i++ ) {
        if ( $i % 2 == 0 ) {
            yield $i;
        }
    }
}

// $saylar = iterator_to_array( saylar() );

// var_dump( $saylar );

// var_dump( saylar()[0] );

foreach ( saylar() as $say ) {
    echo $say;
}

// print_r($_SERVER);

function get(string $uri, callable $callback) {
    if ( $uri === '/users' && is_callable($callback) ) {
        echo $callback();
    }
};

get('/users', fn() => "test");

$hesab = fn($a, $b) => $a + $b;

var_dump( $hesab(3, 4) );

// readline('reqem yaz');

$hesabla = function($a, $b) {
    return $a + $b;
};

var_dump( $hesabla(3, 3) );
// return function() {};

$metn = "metn";

function metnYaz() {

    global $metn;

    echo $metn;
}

metnYaz();

$metnYazIndii = function() use($metn) {
    echo $metn;
};

$methYazIndii();

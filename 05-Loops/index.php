<?php

/**
 * for
 * foreach
 * while
 * do-while
 */

$cars = ['lada', 'bmw', 'audi'];

// // count();

// for ( $i = 0; $i < count($cars); $i++ ) {
//     echo $cars[$i];
// }

// // $siyahi = [];
// // $siyahi[] = 1;
// // $siyahi[] = 2;
// // $siyahi[]

// print_r($siyahi);

// $saylar = [];

// for ( $say = 1; $say <= 10; $say++ ) {
//     if ( $say % 2 === 0 ) {
//         $saylar[] = $say;
//     }
// }

// print_r($saylar);

// echo "<br>";

// for ( $a = 1, $b = 5; $a < 5, $b > 1; $a++, $b-- ) {
//     echo $a . '-' . $b . "<br>";
// }

// for( $t = 0; $t < 3; $t++ ):
//     echo $t;
// endfor;


// echo "<br>";
// foreach ( $cars as $index => $value ) {
//     echo $index .': ' . $value . "<br>";
// }

// foreach( $cars as $car ) {

// }

// unset($car);

// // echo $car;

// foreach($cars as $car):
//     echo $car;
// endforeach;

// unset($car);

// echo $car;

// $user = [
//     'name' => 'John',
//     'surname' => 'Doe'
// ];
// // $user = 20;
// echo "<br>";
// foreach ( $user as $key => $value ) {
//     echo $key . ': ' . $value . "<br>";
// }
// // var_dump($user);

// foreach( $user as $detail ):
//     echo $detail;
// endforeach;

// print_r( get_defined_vars() );

// @foreach(  )
// @endforeach


// print_r($cars);
// print_r($user);

// $input = readline('say yaz:');

// $start = 0;

// while( $start < 2 ) {
//     $input = readline('say yaz: ');

//     if ( !is_numeric($input) ) {
//         $start++;
//     } else {
//         break;
//     }
// }

// $start = 2;

// do {
//     echo "salam";
//     $start++;
// } while( $start < 3 );
<?php

/**
 * if / else if /else
 * switch / case
 * match
 */

$say = 10;

if ( 10 > 9 and 6 > 4  ) {
    echo "---------";
}

if ( 10 > 9):
echo "++";
endif;

// @if()
// <a></a>
// @endif

if ( $say > 11 ) {
    echo "11dan boyuk deyil";
} elseif ( $say > 6 ) {
    echo "6-dan boyukdur";
}

switch( $say ) {
    case 11:
        echo "11";
        break;
    case 10:
        echo "10";
        break;
    default:
        echo "def";
}

$status = 2;

$cavab = match($status) {
    0 => 'qebul olundu',
    1 => 'Baxildi',
    2 => 'yola salindi',
    3 => 'imtina',
    default => 'namelum'
};

echo $cavab;
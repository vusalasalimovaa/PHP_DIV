<?php

/**
 * explode
 * implode
 * strlen
 * strtoupper
 * strtolower
 * str_contains
 * str_starts_with
 * str_ends_with
 * str_replace
 * preg_replace
 * preg_match
 * preg_match_all
 * 
 * array_slice
 * array_splice
 * 
 * callback
 */

$icaze_verilen_xidmetler = [
    'gmail.com',
    'outlook.com'
];

$mail = "developer@gmail.com";

$exploded_mail = explode('@', $mail);

// $username = $exploded_mail[0];
// $domain = $exploded_mail[1];

list($username, $domain) = $exploded_mail;

if ( in_array($domain, $icaze_verilen_xidmetler) ) {
    echo "dogrudur";
} else {
    echo "domain dogru deyil";
}

echo (
    in_array($domain, $icaze_verilen_xidmetler)
    ? "dogrudur"
    : "dogru deyil"
);

// true || false

// bu_gun_string_metodlari_kecilir

$xeber_basligi = "Bu gun string metodlari kecilir";

$seo_basliq_1 = str_replace(' ', '_', $xeber_basligi);

echo "<br>";
echo $seo_basliq_1;

$exploded_xeber_basligi = explode(' ', $xeber_basligi);

$seo_xeber_basliqi_2 = implode('_', $exploded_xeber_basligi);
echo "<br>";
echo strtolower($seo_xeber_basliqi_2);

$kiril = ['я', 'ю', 'з'];
$latin = ['ya', 'yu', 'z'];

echo str_replace($kiril, $latin, "юзя");

$herfler = [
    'я' => 'ya',
    'ю' => 'yu',
    'з' => 'z'
];

echo "<br>";

echo str_replace(
    array_keys($herfler),
    array_values($herfler),
    "юзяюзяюзя"
);

echo strlen( "salam" );

// 10-00-001 -> 10OO001

// echo preg_replace(
//     "//"
// );

/**
 * +
 * ()
 * []
 * {}
 */

$nomre = "+994(70)804-19-61";

// +994(**)***-**-**

$match = preg_match(
    "/\+994\([0-9]{2}\)([0-9]{3})-{1}([0-9]{2})-{1}([0-9]{2})/",
    $nomre,
    $matches
);

print_r( $matches );

$mesaj = "sizin ... unvaniniza otp kodu gonderildi";

$email = "developer@musa.az";

$data = preg_replace(
    "/([a-z]{1})(.+)([a-z]{1})(@musa.az)/",
    "sizin $1****$3$4 unvaniniza otp kodu gonderildi",
    $email
);
echo "<br>";
echo $data;

var_dump( str_contains("developer", "dev") );

var_dump( str_starts_with("developer", "dev") );

var_dump( str_ends_with("developer", "er") );
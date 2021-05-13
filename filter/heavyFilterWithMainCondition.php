<?php
// a condition that is always met - a sample of users over 10 years old
// username is longer than 10 characters

$array = [
    [
        'age' => 18,
        'coef'=> 2,
        'name' => 'Christopher'
    ],
    [
        'age' => 28,
        'coef'=> 0.1,
        'name' => 'Olga'
    ],
];

function filter($arr, $filter_function) {
    $newArr = [];

    foreach($arr as $val) {
        if ($filter_function($val)) {
            $newArr[] = $val;
        }
    }
    return $newArr;
}

//main sample of users over 10 years old
function mainFilterValues($fn) {

    return function($user) use($fn) {
        return $user['age']> 10 && $fn($user);
    };
}

$data = filter($array, mainFilterValues(function($user) {
    return strlen($user['name']) > 10;

}));
var_dump($data);


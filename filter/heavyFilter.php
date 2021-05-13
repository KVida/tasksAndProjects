<?php
$array = [
    [
        'age' => 18,
        'coef'=> 2,
        'name' => 'fhjdhfdhufurehjfndsj'
    ],
    [
        'age' => 28,
        'coef'=> 0.1,
        'name' => 'fhjdhfdhufurehjfndsj'
    ],

];

//select all users over "18 years old"
$data = filter($array, function ($user){
    return $user['age'] > 18;
});
var_dump($data);

//select all users over "age * coef > 35"
$data = filter($array, function ($user){
    return $user['age'] * $user['coef']  > 35;
});
var_dump($data);

function filter($arr, $filter_function) {
    $newArr = [];

    foreach($arr as $val) {
        if ($filter_function($val)) {
            $newArr[] = $val;
        }
    }
    return $newArr;
}
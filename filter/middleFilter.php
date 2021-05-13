<?php
$array = [1,2, 0, '', 32, null];
$arrFilter = [0, ''];

$data = filter($array, filterValues($arrFilter));
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

function filterValues($filter_values_arr) {

    return function($val) use ($filter_values_arr) {
        $flag = true;
        foreach ($filter_values_arr as $el_filter_values) {
            if ($val !== $el_filter_values) {

            } else {
                $flag = false;
                break;
            }
        }

        return $flag;
    };
}
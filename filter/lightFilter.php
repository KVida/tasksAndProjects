<?php
$arr = ['',1,0,'jhjgfj','',5, 0, '0.0'];
$arrFilters = ['',0];

$data = filterArr($arr, $arrFilters);
var_dump($data);

function filterArr($array, $arrFilters) {
    
    foreach ($arrFilters as $elFilter) {
        $arrayNew = [];
        foreach ($array as $val) {
            if ($val !== $elFilter) {
                $arrayNew[] = $val;
            }
        }
        
       $array = $arrayNew;
    }
    
    return $array;
}
<?php
$input = preg_split('/\s+/', trim(fgets(STDIN)));

$slice_array=array_slice($input ,array_search(min($input),$input));
$result=array();

for($i=array_search(min($slice_array),$slice_array);$i<=array_search(max($slice_array),$slice_array);$i++){
    if(end($result)<$slice_array[$i]){
        array_push($result,$slice_array[$i]);
    }
}

echo implode(" ", $result);
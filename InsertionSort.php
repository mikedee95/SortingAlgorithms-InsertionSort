<?php
function insertionSort($list){
    for($i = 0;$i < count($list); $i++){
        $j = $i - 1;
        while ( $j >= 0 && $list[$j] > $list[$i]){
            $list[$j+1] = $list[$j];
            $j--;
        }
        $list[$j+1] = $list[$i];
    }
    return $list;
}
echo "<pre>";
$list = [4,5,2,5,2,52,5,6,8,4,66,3,6,54,5,35];
var_dump(insertionSort($list));
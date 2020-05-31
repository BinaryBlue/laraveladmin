<?php

function hello(){
    return 'hello';
}

function remove_item_that_not_match($array, $key, $value){
    foreach($array as $subKey => $subArray){
         if($subArray[$key] != $value){
              unset($array[$subKey]);
         }
    }
    return $array;
}
?>
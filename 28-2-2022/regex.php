<?php

$str = "hello this is ritik 34 and I am from gorakhpur";
// preg_match("/is/i", $str, $arr);

// preg_match_all("/is|ri/i", $str, $arr);

// preg_match_all('/[hr]/i',$str,$arr);
// $arr=preg_match('/h/m',$str);

// preg_match_all('/[^rit]/',$str,$arr);
// preg_match_all('/[a-c]/',$str,$arr);
preg_match_all('/[a-c0-4]/',$str,$arr);


echo '<pre>';
var_dump($arr);
echo '<pre>';

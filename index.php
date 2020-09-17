<?php

/* $text = '2355 5679 3456 9876';
$reg = preg_match_all("#([0-9]{4})#",$text,$arr);
var_dump($reg);
echo '<pre>';
print_r($arr);
echo '</pre>'; */

$text = '<b>text</b> rtrtrtr ghvhgkkyu<i>italic</i>';
$reg = preg_match_all("#<[^>]+>#",$text,$arr);//лайф хак для поиска тегов
var_dump($reg);
echo '<pre>';
print_r($arr);
echo '</pre>';
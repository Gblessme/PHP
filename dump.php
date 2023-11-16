<?php
require __DIR__.'/vendor/autoload.php';

//initialisaion de variables
$number=123;
$text="foo bar baz";
$flag=true;

//inspection de variables
var_dump($number);
var_dump($text);
var_dump($flag);

//inspection de variables avec symfony/var_dumper
dump($number);
dump($text);
dump($flag);

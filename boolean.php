<?php
$x = true; //1
$y = false;  //0

// AND = X
$and = $x && $y;

// var_dump($and);

// OR = +
$or = $x || $y && true || true;

var_dump($or);

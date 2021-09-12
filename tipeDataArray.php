<?php

$values = array(1, 2, 3, 4);

var_dump($values);

$names = ["linggar", "pra", "yogi", 23];

var_dump($names);

//get
echo $names[0] . "\n";
//change value
echo $names[0] = "yogi \n";
//delete
unset($names[0]);
echo $names[0];

var_dump(count($names));

//array menjadi Map
$res = array(
    'code' => 0,
    'message' => "transaksi sukses di generate"
);

var_dump($res);

<?php

// "1. ekrane atvaizduokite teksta 'Sios dienos data - ' ir su php atvaizduokite sios dienos data"

$string = "Sios dienos data - ";
$date = date('Y.m.d');

$result = $string . $date;

print $result;
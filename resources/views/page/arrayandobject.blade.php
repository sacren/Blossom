@php
declare(strict_types = 1);
@endphp

@use('App\Blossom\ArrayAndObject')

<x-layout>

@php

$str = new ArrayAndObject();

$arr = $str->toArray();
var_dump($arr);
echo '<br>';

var_dump($arr['a']); // int(1)
echo '<br>';

var_dump($arr['b']); // int(2)
echo '<br>';

var_dump($arr['c']); // int(3)
echo '<br>';

$obj = $str->toObject();
var_dump($obj);
echo '<br>';

var_dump($obj->a); // int(1)
echo '<br>';

var_dump($obj->b); // int(2)
echo '<br>';

var_dump($obj->c); // int(3)
echo '<br>';

$name = new stdClass();
$name->first = 'John';
$name->last = 'Doe';

var_dump($name); // object(stdClass)#298 (2) { ["first"]=> string(4) "John" ["last"]=> string(3) "Doe" }
echo '<br>';

var_dump($name->first); // string(4) "John"
echo '<br>';

var_dump($name->last); // string(3) "Doe"
echo '<br>';

$numbers = (object) [5, 6, 7];

var_dump($numbers); // object(stdClass)#297 (3) { ["0"]=> int(5) ["1"]=> int(6) ["2"]=> int(7) }
echo '<br>';

var_dump($numbers->{0}); // int(5)
echo '<br>';

var_dump($numbers->{1}); // int(6)
echo '<br>';

var_dump($numbers->{2}); // int(7)
echo '<br>';

@endphp

</x-layout>

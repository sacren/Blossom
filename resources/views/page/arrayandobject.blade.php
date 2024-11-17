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

@endphp

</x-layout>

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

// array object
$numbers = (object) [5, 6, 7];

var_dump($numbers); // object(stdClass)#297 (3) { ["0"]=> int(5) ["1"]=> int(6) ["2"]=> int(7) }
echo '<br>';

var_dump($numbers->{0}); // int(5)
echo '<br>';

var_dump($numbers->{1}); // int(6)
echo '<br>';

var_dump($numbers->{2}); // int(7)
echo '<br>';

// integer object
$six = (object) 6;

var_dump($six); // object(stdClass)#295 (1) { ["scalar"]=> int(6) }
echo '<br>';

var_dump($six->scalar); // int(6)
echo '<br>';

// float object
$floatObj = (object) 6.7;

var_dump($floatObj); // object(stdClass)#300 (1) { ["scalar"]=> float(6.7) }
echo '<br>';

var_dump($floatObj->scalar); // float(6.7)
echo '<br>';

// boolean object
$boolObj = (object) true;

var_dump($boolObj); // object(stdClass)#296 (1) { ["scalar"]=> bool(true) }
echo '<br>';

var_dump($boolObj->scalar); // bool(true)
echo '<br>';

// null object
$emptyObj = (object) null;

var_dump($emptyObj); // object(stdClass)#302 (0) { }
echo '<br>';

// string object
$stringObj = (object) 'Hello, World!';

var_dump($stringObj); // object(stdClass)#301 (1) { ["scalar"]=> string(6) "string" }
echo '<br>';

var_dump($stringObj->scalar); // string(6) "string"
echo '<br>';

$str = new ArrayAndObject('{"a":5,"b":6,"c":7}');

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

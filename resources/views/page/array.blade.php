@php
declare(strict_types=1);
@endphp

@include('page.helper')

<x-layout>

  <x-slot:title>
    Array
  </x-slot>

@php

/** Array */

$list = [
  'a' => 1,
  'b' => 2,
  'c' => 3,
  'd' => 4,
  'e' => 5,
];

prettyPrint($list);
prettyPrint(array_chunk($list, 3));
prettyPrint(array_chunk($list, 3, true));

$a1 = [ 'a', 'b', 'c' ];
$a2 = [ 5, 10, 15 ];

prettyPrint(array_combine($a1, $a2)); // array size must be equal

$a3 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$a4 = array_filter($a3, fn($value) => $value % 2 === 0); // remove odd numbers
$a5 = array_filter($a3, fn($key) => $key % 2 === 0, ARRAY_FILTER_USE_KEY);
$a6 = array_filter($a3, fn($value, $key) => $value % 2 === 0, ARRAY_FILTER_USE_BOTH);

prettyPrint($a4);
prettyPrint($a5);
prettyPrint($a6);
prettyPrint(array_values($a6)); // reindex array

$a7 = [ null, 1, 2, 0.0, '0', 5, false, [], 8, 0, ];
$a8 = array_filter($a7); // filter out false values by default

prettyPrint($a7);
prettyPrint($a8);

@endphp

</x-layout>

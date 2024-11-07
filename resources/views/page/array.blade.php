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

@endphp

</x-layout>

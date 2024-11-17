@php
declare(strict_types = 1);
@endphp

@use('App\Blossom\ArrayAndObject')

<x-layout>

@php

$tmp = new ArrayAndObject();

var_dump($tmp->toArray());
echo '<br>';

var_dump($tmp->toObject());
echo '<br>';

@endphp

</x-layout>

@php
declare(strict_types=1);
@endphp

<x-layout>

<x-slot:title>
Configure
</x-slot>

@php

/** php.ini & configuration */

var_dump(ini_get('error_reporting'));
echo '<br>';

var_dump(E_ALL);
echo '<br>';

var_dump(ini_get('memory_limit'));
echo '<br>';

@endphp

</x-layout>

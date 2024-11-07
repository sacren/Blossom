<x-layout>

<x-slot:title>
Datetime
</x-slot>

@php

/** Date & Time */

date_default_timezone_set('America/Denver'); // Set timezone first

echo date_default_timezone_get() . '<br>';

$currentTime = time(); // Unix timestamp

echo $currentTime . '<br>';

$fiveDaysFromNow = time() + 5 * 24 * 60 * 60; // 5 days from now

echo $fiveDaysFromNow . '<br>';

echo $currentTime - 1 * 60 * 60 * 24 . '<br>'; // 1 day ago

echo date('m/d/Y g:ia', $currentTime) . '<br>'; // use date() to format a timestamp

echo date('m/d/Y g:ia', $fiveDaysFromNow) . '<br>';

date_default_timezone_set('UTC'); // set timezone back to UTC

echo date_default_timezone_get() . '<br>';

echo date('m/d/Y g:ia', $currentTime) . '<br>';

@endphp

</x-layout>

<x-layout>

<x-slot:title>
Datetime
</x-slot>

@php

/** Date & Time */

date_default_timezone_set('America/Denver'); // Set timezone first

$currentTime = time(); // Unix timestamp

echo $currentTime . '<br>';

echo $currentTime + 5 * 60 * 60 * 24 . '<br>'; // 5 days from now

echo $currentTime - 1 * 60 * 60 * 24 . '<br>'; // 1 day ago

echo date('m/d/Y g:ia', $currentTime) . '<br>'; // use date() to format a timestamp

@endphp

</x-layout>

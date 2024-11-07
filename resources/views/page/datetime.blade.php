@php
declare(strict_types=1);
@endphp

<x-layout>

<x-slot:title>
Datetime
</x-slot>

@php

/** Date & Time */

date_default_timezone_set('America/Denver'); // set timezone first

echo date_default_timezone_get() . '<br>'; // get timezone

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

$timestamp = mktime(0, 0, 0, 4, 12, null);

echo date('m/d/Y g:ia', $timestamp) . '<br>';

$timestamp = strtotime('2021-04-12 08:00:00');

echo date('m/d/Y g:ia', $timestamp) . '<br>';

$timestamp = strtotime('tomorrow');

echo date('m/d/Y g:ia', $timestamp) . '<br>';

$timestamp = strtotime('first tuesday of may 2021');

echo date('m/d/Y g:ia', $timestamp) . '<br>';

$date = date('m/d/Y g:ia', strtotime('second friday of may 2021'));

echo '<pre>';
print_r(date_parse($date));
print_r(date_parse_from_format('m/d/Y g:ia', $date));
echo '</pre>';

@endphp

</x-layout>

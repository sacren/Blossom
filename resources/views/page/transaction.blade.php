@php
declare(strict_types=1);
@endphp

@use('App\Blossom\Transaction')

<x-layout>

<x-slot:title>
Transaction
</x-slot>

@php

$transaction = new Transaction();

var_dump($transaction); // object(Transaction)#298 (0) { }
echo '<br>';

@endphp

</x-layout>

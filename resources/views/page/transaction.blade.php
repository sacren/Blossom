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

// object(App\Blossom\Transaction)#298 (2) { ["amount"]=> NULL ["description"]=> NULL }
var_dump($transaction);
echo '<br>';

var_dump($transaction->amount); // null
echo '<br>';

var_dump($transaction->description); // null
echo '<br>';

@endphp

</x-layout>

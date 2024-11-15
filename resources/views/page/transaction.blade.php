@php
declare(strict_types=1);
@endphp

@use('App\Blossom\Transaction')

<x-layout>

<x-slot:title>
Transaction
</x-slot>

@php

$transaction = new Transaction(100, 'Transaction 1');

// object(App\Blossom\Transaction)#298 (0) { ["amount"]=> float(100) ["description"]=> string(13) "Transaction 1" }
var_dump($transaction);
echo '<br>';

var_dump($transaction->amount); // float(100)
echo '<br>';

var_dump($transaction->description); // string(13) "Transaction 1"
echo '<br>';

@endphp

</x-layout>

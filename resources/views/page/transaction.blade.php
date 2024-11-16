@php
declare(strict_types=1);
@endphp

@use('App\Blossom\Transaction')

<x-layout>

<x-slot:title>
Transaction
</x-slot>

@php

$transaction = (new Transaction(100, 'Transaction 1'))
   ->addTax(8.25)
   ->applyDiscount(10);

var_dump(number_format($transaction->getAmount(), 2)); // string(5) "97.43"
echo '<br>';

var_dump($transaction->getDescription()); // string(13) "Transaction 1"
echo '<br>';

@endphp

</x-layout>

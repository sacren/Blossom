@php
declare(strict_types=1);
@endphp

@use('App\Blossom\Transaction')

<x-layout>

<x-slot:title>
Transaction
</x-slot>

@php

$amount = (new Transaction(100, 'Transaction 1'))
   ->addTax(8.25)
   ->applyDiscount(10)
   ->getAmount();

var_dump(number_format($amount, 2)); // string(5) "97.43"
echo '<br>';

@endphp

</x-layout>

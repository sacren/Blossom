@php
declare(strict_types=1);
@endphp

@use('App\Blossom\Transaction')

<x-layout>

<x-slot:title>
Transaction
</x-slot>

@php

$tranx = (new Transaction(100, 'Transaction 1'))
   ->addTax(8.25)
   ->applyDiscount(10);

var_dump(number_format($tranx->getAmount(), 2));
echo '<br>';

@endphp

</x-layout>

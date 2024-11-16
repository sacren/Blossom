@php
declare(strict_types=1);
@endphp

@use('App\Blossom\Transaction')

<x-layout>

<x-slot:title>
Transaction
</x-slot>

@php

$tranx1 = (new Transaction(100, 'Transaction 1'))
   ->addTax(8.25)
   ->applyDiscount(10);

$tranx2 = (new Transaction(200, 'Transaction 2'))
   ->addTax(7.5)
   ->applyDiscount(15);

var_dump(number_format($tranx1->getAmount(), 2), number_format($tranx2->getAmount(), 2));
echo '<br>';

@endphp

</x-layout>

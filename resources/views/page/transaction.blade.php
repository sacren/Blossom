@php
declare(strict_types=1);
@endphp

@use('App\Blossom\Transaction')
@use('App\Blossom\Customer')

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

var_dump($tranx->getCustomer()?->getPaymentProfile()?->id ?? 'N/A');
echo '<br>';

@endphp

</x-layout>

@php
    declare(strict_types=1);
@endphp

@use('App\Blossom\Transaction')
@use('App\Blossom\Customer')
@use('App\Blossom\Paddle\Transaction as PaddleTransaction')

<x-app-layout>

    <x-slot:header>
        Transaction
    </x-slot:header>

    @php

        $tranx = (new Transaction(100, 'Transaction 1'))->addTax(8.25)->applyDiscount(10);

        var_dump(number_format($tranx->getAmount(), 2));
        echo '<br>';

        var_dump($tranx->getCustomer()?->getPaymentProfile()?->id ?? 'N/A');
        echo '<br>';

        // object(App\Blossom\Paddle\Transaction)#298 (0) { }
        var_dump(new PaddleTransaction());
        echo '<br>';

    @endphp

</x-app-layout>

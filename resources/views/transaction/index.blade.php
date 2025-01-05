<x-app-layout>
    <x-slot:header>
        Transaction
    </x-slot:header>

    @php
        $transact = new $transaction(
            amount: 100.00,
            description: 'Test transaction',
        );
        $transact->addTax(8.25)->applyDiscount(10);

        var_dump(number_format($transact->getAmount(), 2));
        echo '<br>';

        var_dump($transact->getCustomer()?->getPaymentProfile()?->id ?? 'N/A');
        echo '<br>';

        // object(App\Blossom\Paddle\Transaction)#298 (0) { }
        var_dump(new $paddleTransaction());
        echo '<br>';
    @endphp

</x-app-layout>

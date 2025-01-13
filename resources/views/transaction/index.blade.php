<x-app-layout>
    <x-slot:header>
        Transaction
    </x-slot:header>

    @php
        $paymentProfile = new $paymentProfile();
        $customer = new $customer($paymentProfile);
        $transaction = new $transaction(amount: 100.0, description: 'Test transaction', customer: $customer);
        $transaction->addTax(8.25)->applyDiscount(10);

        var_dump(number_format($transaction->getAmount(), 2));
        echo '<br>';

        var_dump($transaction->getCustomer()?->getPaymentProfile()?->id ?? 'N/A');
        echo '<br>';

        // object(App\Blossom\Paddle\Transaction)#298 (0) { }
        var_dump(new $paddleTransaction());
        echo '<br>';

        $transaction = null; // Destruct: Test transaction
    @endphp

</x-app-layout>

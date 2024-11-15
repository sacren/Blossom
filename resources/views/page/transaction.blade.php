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

// object(App\Blossom\Transaction)#298 (0) { ["amount"]=> uninitialized(float) ["description"]=> uninitialized(string) }
var_dump($transaction);
echo '<br>';

@endphp

</x-layout>

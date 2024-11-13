@php
declare(strict_types=1);
@endphp

@include('page.app.App')

<x-transactions>

<x-slot:title>
Budget|Expenses
</x-slot>

@php

$root = base_path('resources/views/page') . DIRECTORY_SEPARATOR;

define('APP_PATH', $root . 'app');
define('FILES_PATH', $root . 'transactions');
define('VIEWS_PATH', $root);

$files = getTransactionFiles(FILES_PATH);

$transactions = [];

foreach ($files as $file) {
    $transactions = array_merge($transactions, getTransactions($file));
}

@endphp

<x-tranx-table :transactions="$transactions"></x-tranx-table>

</x-transactions>

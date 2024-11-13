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

@endphp

<x-tranx-table></x-tranx-table>

</x-transactions>

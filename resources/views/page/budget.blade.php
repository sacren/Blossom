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

define('APP_PATH', $root . 'app' . DIRECTORY_SEPARATOR);
define('FILES_PATH', $root . 'transactions' . DIRECTORY_SEPARATOR);
define('VIEWS_PATH', $root);

@endphp

</x-transactions>

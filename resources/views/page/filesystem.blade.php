@php
declare(strict_types=1);
@endphp

<x-layout>

<x-slot:title>
Filesystem
</x-slot>

@php

/** filesystem */

$dir = scandir(__DIR__);

var_dump($dir);

@endphp

</x-layout>

@php
    declare(strict_types=1);
@endphp

@include('page.helper')

<x-app-layout>

    <x-slot:title>
        Array
    </x-slot:title>

    @php

        /** Array */

        $list = [
            'a' => 1,
            'b' => 2,
            'c' => 3,
            'd' => 4,
            'e' => 5,
        ];

        prettyPrint($list);
        prettyPrint(array_chunk($list, 3));
        prettyPrint(array_chunk($list, 3, true));

        $a1 = ['a', 'b', 'c'];
        $a2 = [5, 10, 15];

        prettyPrint(array_combine($a1, $a2)); // array size must be equal

        $a3 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
        $a4 = array_filter($a3, fn($value) => $value % 2 === 0); // remove odd numbers
        $a5 = array_filter($a3, fn($key) => $key % 2 === 0, ARRAY_FILTER_USE_KEY);
        $a6 = array_filter($a3, fn($value, $key) => $value % 2 === 0, ARRAY_FILTER_USE_BOTH);

        prettyPrint($a4);
        prettyPrint($a5);
        prettyPrint($a6);
        prettyPrint(array_values($a6)); // reindex array

        $a7 = [null, 1, 2, 0.0, '0', 5, false, [], 8, 0];
        $a8 = array_filter($a7); // filter out false values by default

        prettyPrint($a7);
        prettyPrint($a8);

        $a9 = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => '1'];
        $a10 = array_keys($a9);
        $a11 = array_keys($a9, 1);
        $a12 = array_keys($a9, 1, true); // strict comparison

        prettyPrint($a9);
        prettyPrint($a10);
        prettyPrint($a11);
        prettyPrint($a12);

        $a13 = [1, 2, 3];
        // callback takes array value for argument
        // index retained
        $a14 = array_map(fn($value) => $value + 2, $a13);

        prettyPrint($a13);
        prettyPrint($a14);

        $a15 = ['a' => 1, 'b' => 2, 'c' => 3];
        $a16 = ['d' => 4, 'e' => 5, 'f' => 6];
        $a17 = array_map(fn($value) => $value + 2, $a15); // index retained
        // callback takes two array values for arguments
        // new index
        $a18 = array_map(fn($v1, $v2) => $v1 + $v2, $a15, $a16);

        prettyPrint($a15);
        prettyPrint($a16);
        prettyPrint($a17);
        prettyPrint($a18);

        // not aligned with $a16, 0 will be added
        $a19 = ['a' => 1, 'b' => 2];
        $a20 = array_map(fn($v1, $v2) => $v1 + $v2, $a19, $a16);

        prettyPrint($a20);

        $a21 = array_map(null, $a15, $a16); // build new array

        prettyPrint($a21);

    @endphp

</x-app-layout>

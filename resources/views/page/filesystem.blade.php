@php
declare(strict_types=1);
@endphp

<x-layout>

<x-slot:title>
Filesystem
</x-slot>

@php

/** filesystem */

$dir = scandir(__DIR__); // array

var_dump($dir);
echo '<br>';

var_dump($dir[0]); // current directory
echo '<br>';

var_dump($dir[1]); // parent directory
echo '<br>';

var_dump(is_file($dir[0])); // bool false
echo '<br>';

var_dump(is_dir($dir[1])); // bool true
echo '<br>';

$filename = resource_path('css/app.css');

if (file_exists($filename)) {
    clearstatcache();
    echo filesize($filename) . '<br>';
} else {
    echo 'File not found';
    return;
}

$filepointer = fopen($filename, 'r');

while (($line = fgets($filepointer)) !== false) {
    echo $line . '<br>';
}

fclose($filepointer);

@endphp

</x-layout>

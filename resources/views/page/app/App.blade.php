@php

declare(strict_types=1);

function getTransactionFiles(string $path): array
{
    $files = [];

    foreach (scandir($path) as $file) {
        $file = $path . DIRECTORY_SEPARATOR . $file;

        if (is_file($file)) {
            $files[] = $file;
        }
    }

    return $files;
}

@endphp

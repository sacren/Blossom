@php

declare(strict_types=1);

function getTransactionFiles(string $path): array
{
    $files = [];

    foreach (scandir($path) as $file) {
        if (is_dir($file)) {
            continue;
        }

        $files[] = $file;
    }

    return $files;
}

@endphp

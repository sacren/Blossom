@php

declare(strict_types=1);

/**
 * Build array of files with given path
 *
 * @param string $path
 *
 * @return array of files
 */
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

/**
 * Scan the file in csv and save transactions in array
 *
 * @param string $fileName
 *
 * @return array
 */
function getTransactions(string $fileName): array
{
    if (!file_exists($fileName)) {
        trigger_error('File not found: ' . $fileName, E_USER_ERROR);
    }

    $filepointer = fopen($fileName, 'r');

    $transactions = [];

    while (($transaction = fgetcsv($filepointer)) !== false) {
        if ( $transaction[0] === 'Date') {
            continue;
        }

        $transactions[] = parseEachTranx($transaction);
    }

    fclose($filepointer);

    return $transactions;
}

/**
 * Parse each transaction
 *
 * @param array of individual transaction
 *
 * @return array
 */
function parseEachTranx(array $eachTranx): array
{
    $columns = ['date', 'checkNumber', 'description', 'amount'];
    $eachTranx[3] = floatval(str_replace(['$', ','], '', $eachTranx[3]));

    return array_combine($columns, $eachTranx);
}

@endphp

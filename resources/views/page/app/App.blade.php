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
function getTransactions(string $fileName, ?callable $tranxHandler = null): array
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

        if ($tranxHandler) {
            $transaction = $tranxHandler($transaction);
        }

        $transactions[] = $transaction;
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

/**
 * Get total income, expense and balance
 *
 * @param array $transactions
 *
 * @return array of total
 */
function getTotal(array $transactions): array
{
    $total = [
        'income' => 0,
        'expense' => 0,
    ];

    foreach ($transactions as $transaction) {
        if ($transaction['amount'] >= 0) {
            $total['income'] += $transaction['amount'];
        } else {
            $total['expense'] += $transaction['amount'];
        }
    }

    $total['balance'] = $total['income'] + $total['expense'];

    return $total;
}

@endphp

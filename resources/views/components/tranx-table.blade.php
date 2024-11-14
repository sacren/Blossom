@php

declare(strict_types=1);

/**
 * Add the dollar sign to the amount
 *
 * @param float $amount
 *
 * @return string of dollar amount
 */
function addDollarSign(float $amount): string
{
    return ($amount < 0 ? '-' : null) . '$' . number_format(abs($amount), 2);
}

/**
 * Format date to month day, year
 *
 * @param string $date
 *
 * @return string
 */
function formatDate(string $date): string
{
    return date('M j, Y', strtotime($date));
}

@endphp

<table>
  <thead>
    <tr>
      <th>Date</th>
      <th>Check #</th>
      <th>Description</th>
      <th>Amount</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($transactions as $transaction)
    <tr>
      <td>{{ formatDate($transaction['date']) }}</td>
      <td>{{ $transaction['checkNumber'] }}</td>
      <td>{{ $transaction['description'] }}</td>
      <td>{{ addDollarSign($transaction['amount']) }}</td>
    </tr>
    @endforeach
  </tbody>
  <tfoot>
    <tr>
      <th colspan="3">Total Income:</th>
      <td>{{ addDollarSign($total['income'] ?? 0) }}</td>
    </tr>
    <tr>
      <th colspan="3">Total Expense:</th>
      <td>{{ addDollarSign($total['expense'] ?? 0) }}</td>
    </tr>
    <tr>
      <th colspan="3">Net Total:</th>
      <td>{{ addDollarSign($total['balance'] ?? 0) }}</td>
    </tr>
  </tfoot>
</table>

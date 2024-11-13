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
      <td>{{ $transaction['date'] }}</td>
      <td>{{ $transaction['checkNumber'] }}</td>
      <td>{{ $transaction['description'] }}</td>
      <td>{{ $transaction['amount'] }}</td>
    </tr>
    @endforeach
  </tbody>
  <tfoot>
    <tr>
      <th colspan="3">Total Income:</th>
      <td>@{{ php }}</td>
    </tr>
    <tr>
      <th colspan="3">Total Expense:</th>
      <td>@{{ php }}</td>
    </tr>
    <tr>
      <th colspan="3">Net Total:</th>
      <td>@{{ php }}</td>
    </tr>
  </tfoot>
</table>

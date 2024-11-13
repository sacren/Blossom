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
    @{{ php }}
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

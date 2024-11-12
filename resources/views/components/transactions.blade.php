<!DOCTYPE html>
<html lang="en">
  <head>
    <title>{{ $title ?? 'Laravel' }}</title>
    <style>
    table {
      width: 100%;
      border-collapse: collapse;
      text-align: center;
    }

    table tr th, table tr td {
      padding: 5px;
      border: 1px #eee solid;
    }

    tfoot tr th, tfoot tr td {
      font-size: 20px;
    }

    tfoot tr th {
      text-align: right;
    }
    </style>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
  </head>
  <body>
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
    {{ $slot }}
  </body>
</html>

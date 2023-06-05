<!DOCTYPE html>
<html>
<head>
<style>
  table {
    width: 100%;
    border-collapse: collapse;
    font-family: "Arial", sans-serif;
    font-size: 14px;
    color: #333;
  }

  th, td {
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #ddd;
  }

  th {
    background-color: #4CAF50;
    color: white;
    font-weight: bold;
  }

  tr:nth-child(even) {
    background-color: #f2f2f2;
  }
</style>
</head>
<body>

    <table align="center">

    <thead>
      <tr>
        <th>No</th>
        <th>Jenis Kulit</th>
        <th>Biaya</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($perawatan as $key=>$item)
            <tr>
            <td>{{$key+1}}</td>
              <td>{{$item->jenis_perawatan}}</td>
              <td>{{$item ->Biaya}}</td>
          </tr>
          @endforeach
    </tbody>
  </table>

</body>
</html>

<!DOCTYPE html>
<html>
<head>
<style>
  table {
    width: 100%;
    border-collapse: collapse;
    font-family: "Comic Sans MS", cursive;
    font-size: 14px;
    color: #333;
  }

  th, td {
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #ddd;
  }

  th {
    background-color: #7E57C2;
    color: white;
    font-weight: bold;
  }

  tr:nth-child(even) {
    background-color: #B39DDB;
  }
</style>
</head>
<body>

    <table align="center">

        <thead>
          <tr>
            <th>No</th>
            <th>Jenis Kulit</th>
            <th>Penyebab</th>
            <th>Solusi</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($skintype as $key=>$item)
            <tr>
              <td>{{$key+1}}</td>
              <td>{{$item -> jenis_kulit}}</td>
              <td>{{$item -> penyebab}}</td>
              <td>{{$item -> solusi}}</td>

            </tr>
            @endforeach
        </tbody>
      </table>

</body>
</html>






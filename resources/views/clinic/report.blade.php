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
    background-color: #3498DB;
    color: white;
    font-weight: bold;
  }

  tr:nth-child(even) {
    background-color: #85C1E9;
  }
</style>
</head>
<body>

    <h1>Data Clinic</h1>
    <table align="center">

        <thead>
          <tr>
            <th>ID</th>
            <th>Nama Klinik</th>
            <th>Nama Dokter</th>
            <th>Alamat</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($clinic as $key=>$item)
          <tr>
            <td>{{$item -> id_klinik}}</td>
            <td>{{$item -> tempat_praktik}}</td>
            <td>{{$item -> doctor->nama}}</td>
            <td>{{$item -> Alamat}}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
</body>
</html>



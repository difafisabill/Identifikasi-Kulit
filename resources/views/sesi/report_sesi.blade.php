<!DOCTYPE html>
<html>
<head>
    <title>Data Sesi Dokter</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            border-radius: 5px;
            overflow: hidden;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f9f9f9;
            font-weight: bold;
            color: #333;
            text-transform: uppercase;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #e6f7ff;
        }
    </style>
</head>
<body>
    <h1>Tabel Sesi</h1>

    <table align="center">

        <thead>
          <tr>
            <th>No</th>
            <th>Sesi</th>
            <th>Tanggal</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($p as $key=>$item)
            <tr>
              <td>{{$key+1}}</td>
              <td>{{$item ->sesi}}</td>
              <td>{{$item ->tanggal}}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
</body>
</html>

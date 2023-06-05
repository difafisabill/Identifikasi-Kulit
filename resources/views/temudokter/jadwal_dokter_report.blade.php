<!DOCTYPE html>
<html>
<head>
    <title>Jadwal Dokter</title>
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
        }

        th, td {
            padding: 15px;
            text-align: center;
        }

        th {
            background-color: #4287f5;
            color: #fff;
            text-transform: uppercase;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #e6e6e6;
        }

        td:nth-child(2) {
            color: #4caf50;
            font-weight: bold;
        }

        td:nth-child(3) {
            color: #f44336;
            font-weight: bold;
        }

        td:last-child {
            background-color: #fff;
            color: #333;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 1px;
            border-radius: 5px;
            padding: 8px 12px;
            transition: background-color 0.3s ease;
        }

        td:last-child:hover {
            background-color: #f44336;
            color: #fff;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h1>Jadwal Dokter</h1>

    <table align="center">

        <thead>
          <tr>
            <th>Nama Pasient</th>
            <th>Nama Dokter</th>
            <th>Klinik</th>
            <th>Sesi</th>
            <th>Tanggal</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($temu as $key=>$item)
            <tr>
              <td>{{$item -> nama_pasient}}</td>
              <td>{{$item -> doctor->nama}}</td>
              <td>{{$item -> clinic->tempat_praktik}}</td>
              <td>{{$item -> sesi->sesi}}</td>
              <td>{{$item -> sesi->tanggal}}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
</body>
</html>

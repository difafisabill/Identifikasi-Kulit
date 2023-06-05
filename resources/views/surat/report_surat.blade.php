<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Buat Janji Dokter</title>

   <style>
    table tr td{
        font-size:13px;
    }
    table tr .text{
        text-align: right;
        font-size: :13px;
    }
   </style>
</head>
<body>
    <center>
        <table>
            <tr>
                <td><img src="#" width="90" height="90" ></td>
                <td>
                    <center>
                        <font size ="4">MYSkintype</font><br>
                        <font size ="5">SURAT TEMU JANJI DOKTER</font><br>
                        @foreach ($temu as $key=>$item)
                        <font size ="2">{{$item -> clinic->tempat_praktik}}</font><br>
                        <font size ="2">{{$item -> clinic->Alamat}}</font><br>
                        @endforeach
                    </center>
                </td>
            </tr>
            <tr>
                <td colspan="2"><hr></td>
            </tr>

        </table>

        <br>
        <table>
            @foreach ($temu as $key =>$item )
            <tr>
                <td>Id Pasient</td>
                <td width="572">: {{$item -> id_pasient}} </td>
                <td>Nama Pasient :</td>
                <td width="572">: {{$item -> nama_pasient}} </td>
                <td>Perihal Janji Temu Dengan : {{$item -> doctor->nama}}</td>

                <td width="572">: {{$item -> id_pasient}} </td>
            </tr>
            @endforeach
        </table>
        <br>
        <table>
            @foreach ($temu as $key =>$item )
            <tr>
                <td>
                    <font size="2">Kpd yth Dr.{{$item -> doctor->nama}} <br>
                        Di tempat
                    </font>
                </td>
            </tr>
            @endforeach

        </table>
        <br>
        <table>
            @foreach ($temu as $key =>$item )
            <tr>
                <td>
                    <font size="2">Dengan bukti surat ini saya {{$item -> nama_pasient}},
                        membuat janji temu dengan Dr.{{$item -> doctor->nama}} pada : <br>
                        Sesi : {{$item -> sesi->sesi}} <br>
                        Tanggal : {{$item -> sesi->tanggal}} <br>
                        Tempat : {{$item -> clinic->tempat_praktik}} <br>
                        Alamat : {{$item -> clinic->Alamat}}
                    </font>
                </td>
            </tr>
            @endforeach
        </table>
        <br><br><br>
        <table width="455">
            <tr>
                <td class="text">
                Yang Bertanda Tangan dibawah ini <br><br><br><br><br><br><br>
                Admin
                </td>
            </tr>

        </table>
    </center>
</body>
</html>

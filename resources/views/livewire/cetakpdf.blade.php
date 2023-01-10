<div>

<!DOCTYPE html>
<head>
    <title>Contoh Surat Pernyataan</title>
    <meta charset="utf-8">
    <style>
        #judul{
            text-align:center;
        }

        #halaman{
            margin: auto;
            width: auto; 
            height: auto; 
            position: absolute; 
            /* border: 1px solid;  */
            padding-top: 30px; 
            padding-left: 30px; 
            padding-right: 30px; 
            padding-bottom: 80px;
        }

    </style>

</head>

<body onload="window.print();">
    <div id=halaman>
        <h3 id=judul>SURAT PENERIMAAN LAPORAN KEHILANGAN BARANG</h3>

        <br>

        <p>Saudara yang melaporkan kehilangan:</p>

        <br>
        
        <table>
            <tr>
                <td style="width: 30%;">Nama</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;">{{ $reports->members->name }}</td>
            </tr>
            <tr>
                <td style="width: 30%;">Tanggal Lahir</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;">{{ $reports->members->birth_date}}</td>
            </tr>
            <tr>
                <td style="width: 30%; vertical-align: top;">Alamat</td>
                <td style="width: 5%; vertical-align: top;">:</td>
                <td style="width: 65%;">{{ $reports->members->address}}</td>
            </tr>
            <tr>
                <td style="width: 30%;">Telepon</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;">{{ $reports->members->phone}}</td>
            </tr>
        </table>

        <br>

        <p>Telah melaporkan tentang kehilangan {{ $reports->categories->categories}} yaitu {{ $reports->item }} dengan ciri-ciri {{ $reports->identity}}</p>

        <br>

        <table>
            <tr>
                <td style="width: 30%;">Pada</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;">{{ $reports->loss_date}}</td>
            </tr>
            <tr>
                <td style="width: 30%;">Lokasi</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;">{{ $reports->lost_location}}</td>
            </tr>
            <tr>
                <td style="width: 30%; vertical-align: top;">Kronologi</td>
                <td style="width: 5%; vertical-align: top;">:</td>
                <td style="width: 65%;">{{ $reports->story}}</td>
            </tr>
        </table>

        <br>

        <p>Sesuai dengan laporan ini nomor {{ $reports->id }} yang dilaporkan pada tanggal {{ $reports->report_date }}.</p>

        <br>

        <p>Demikian surat tanda penerimaan laporan kehilangan barang ini dibuat. Agar dapat digunakan dengan sebagaimana mestinya</p>

        <br><br><br><br><br><br><br><br><br><br>
        <div style="width: 50%; text-align: left; float: right;">{{ $reports->polices->sectors->district}}, {{$reports->report_date}}</div><br>
        <br><br><br>
        <div style="width: 50%; text-center text-align: right; float: right;">  {{ $reports->polices->police_name }}</div>

    </div>
</body>

</html>
</div>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surat Keterangan Kelakuan Baik dan Prestasi</title>
</head>
<body>
    <h2 style="text-align: center;">Surat Keterangan Kelakuan Baik dan Prestasi</h2>
    <p>Yang bertanda tangan di bawah ini, Kepala Sekolah SDN 1 Sepanjang, menerangkan bahwa:</p>
    <p>
        Nama: {{ $surat->nama_siswa }}<br>
        Kelas: {{ $surat->kelas }}<br>
    </p>
    <p>
        Adalah siswa yang memiliki kelakuan baik, dengan rincian sebagai berikut:
        <br>
        {{ $surat->kelakuan_baik }}
    </p>
    <p>
        Prestasi yang telah diraih:
        <br>
        {{ $surat->prestasi }}
    </p>
    <p>Demikian surat keterangan ini dibuat untuk dipergunakan sebagaimana mestinya.</p>
    <p style="text-align: right; margin-top: 50px;">Kepala Sekolah</p>
</body>
</html>

<html>

<head>
    <title>Rekap Transaksi</title> 

</head> 
<body> 
<br><br><br><br><br>
    <center> 
        <table bgcolor ='#857f7f' width='290px'> 
            <tr> 
                <th colspan="3"> 
                    <h1>Toko sepatu selalu ready</h1>
                    <hr>
                </th> 
            </tr> 
            <tr> 
                <th>Nama pembeli</th> 
                <th>:</th> 
                <td> 
                    <?= $nama; ?> 
                </td> 
            </tr> 
            <tr>
            <tr> 
                <th>No telp</th> 
                <th>:</th> 
                <td> 
                    <?= $notelp; ?> 
                </td> 
            </tr> 
            <tr> 
                <th>Merk sepatu</th> 
                <th>:</th> 
                <td> 
                    <?= $merk; ?> 
                </td> 
            </tr> 
            <tr> 
                <th>Ukuran sepatu</th> 
                <th>:</th> 
                <td> 
                    <?= $ukuran; ?> 
                </td> 
            </tr> 
            <tr> 
                <th>Harga</th> 
                <th>:</th> 
                <td> 
                    <?= $harga; ?> 
                </td> 
            </tr> 
            <tr> 
                <td colspan="3" align="center"> 
                    <a href="<?= base_url('tokosepatu'); 
                ?>">Kembali</a> 
                </td>
                </tr> 
                <br><br>
            </table> 
        </center> 

</body> 

</html>
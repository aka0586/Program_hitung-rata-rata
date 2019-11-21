<html>
<head>
    <title>Hasil Kereta</title>
</head>
<body>

    <?php
        //Tangkap Variable
        $nama_ann1 = $_POST["Penumpang1"];
        $nama_ann2 = $_POST["Penumpang2"];
        $nama_ann3 = $_POST["Penumpang3"];
        $tujuan_ann = $_POST["Tujuan"];
        $kode_ann = $_POST["kode"];
        $jk_ann = $_POST["jk"];
        $kelas_ann = $_POST["kelas"];
        $makan_ann = $_POST["makan"];
        
        //Rumus untuk menentukan harga Kode kereta
        if ($kode_ann == 'AP')
        {
            if ($kelas_ann == 'executive') {$harga_ann = 45000;}
            
                else if ($kelas_ann == 'bussines') {$harga_ann = 40000;} else { $harga_ann = 35000;}
            
        }
        else if ($kode_ann == 'AD')
        {
            if ($kelas_ann == 'executive') { $harga_ann = 65000;}
            
                else if ($kelas_ann == 'bussines') {$harga_ann = 60000;} else { $harga_ann = 55000;}
            
        }
        else
        {
            if ($kode_ann == 'executive') { $harga_ann = 85000; }
            
                else if ($kelas_ann == 'bussines') {$harga_ann = 80000;} else { $harga_ann = 75000; }
            
        } ;
        
        //logika makan
        if ($makan_ann == 'ya') {$tambahan_ann = 15000;} else {$tambahan_ann = 0;}
        
        
        //Grand Total
        $total_ann = $harga_ann + $tambahan_ann;
        
    ?>
    
    <table align="center" border="1" cellpadding="5" cellspacing="1" bgcolor="#CCCCCC" bordercolor="#FFFFFF">
        <tr>
          <th align="center" colspan="2">Tiket Kereta Api</th></tr>

          <tr>
                <td>Nama Penumpang 1</td><td align="center"><?php print $nama_ann1; ?></td></tr>
          <tr>
          <tr>
                <td>Nama Penumpang 2</td><td align="center"><?php print $nama_ann2; ?></td></tr>
          <tr>
          <tr>
                <td>Nama Penumpang 3</td><td align="center"><?php print $nama_ann3; ?></td></tr>
          <tr>

          <tr>
                <td>Tujuan</td><td align="center"><?php print $tujuan_ann; ?></td></tr>
          <tr>

          <tr>
                <td>Kode</td><td align="center"><?php print $kode_ann ?></td>
          </tr>

          <tr>
                <td>Jam Keberangkatan</td><td align="center"><?php print $jk_ann ?></td>
          </tr>

          <tr>
                <td>Kelas</td><td align="center"><?php print $kelas_ann ?></td>
          </tr>

          <tr>
                <td>Makan</td><td align="center"><?php print $makan_ann ?></td>
          </tr>

          <tr>
                <td>Harga Satuan</td><td align="center"><?php print $harga_ann ?></td>
          </tr>

          <tr>
              <td>Biaya tambahan</td><td align="center"><?php print $tambahan_ann ?></td>
          </tr>

          <tr>
              <th align="left">Total</th><th align="center"><?php print $total_ann ?></th>
          </tr>

        <tr><td colspan="2" align="center">Terima Kasih telah berbelanja di toko kami.</td>
        </tr>

        <tr>
        <td colspan="2" align="center"><a href="daftar.php">Input Data Lagi</a></td>
        </tr>
    </table>
</body>
</html>

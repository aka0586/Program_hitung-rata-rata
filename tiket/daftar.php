<head>
    <title>Tiket Kereta Api</title>
</head>
<body>

    <form action="hasil.php" method="post">
        <table align="center" border="2" cellpadding="5" cellspacing="1" bgcolor="#CCCCCC" bordercolor="#FFFFFF">
            <tr>
                <th align="center" colspan="2">Tiket Kereta Api</th>
            </tr>

            <tr>
                <td>Nama Penumpang 1</td>
                <td><input type="text" name="Penumpang1" maxlength="10" size="15"></td>
            </tr>
            <tr>
              <td>Nama Penumpang 2</td>
                <td><input type="text" name="Penumpang2" maxlength="10" size="15"></td>
            </tr>

            <tr>
              <td>Nama Penumpang 3</td>
                <td><input type="text" name="Penumpang3" maxlength="10" size="15"></td>
            </tr>

            <tr>
                <td>Tujuan</td>
                <td>
               <select name="Tujuan">
                    <option>jakarta-semarang</option>
                    <option>semarang-yogyakarta</option>
                    <option>yogyakarta-solo</option>
              </select>
                </td>
            </tr>

            <tr>
                <td>Kode Kereta</td>
                <td>
                <select name="kode">
                      <option value="AP">
                      AP </option>
                      <option value="AD">
                      AD </option>
                      <option value="AB">
                      AB </option> 
                </select>
                </td>
            </tr>

             <tr>
                <td>Jam Keberangkatan</td>
                <td>
                      <input type="radio" name="jk" value="08.00">08.00
                      <input type="radio" name="jk" value="09.00">09.00
                      <input type="radio" name="jk" value="10.00">10.00
                            
                </td>
            </tr>

            <tr>
                <td>Kelas</td>
                <td>
                    <select name="kelas">
                        <option value="executive"> 1 - Executive </option>
                        <option value="bussines"> 2 - Bussines </option>
                        <option value="economy"> 3 - Economy </option>
                    </select>
                </td>
            </tr>

            <tr>
                <td>Makan</td>
                <td>
                      <input type="radio" name="makan" value="ya"> Ya
                      <input type="radio" name="makan" value="no">    Tidak
                            
                </td>
            </tr>
            <tr><td colspan="2" align="center"><input type="submit" value="Proses"></td></tr>
        </table>
    </form>
    
    <br>
    
    <table align="center" border="2" cellpadding="5" cellspacing="1"  bgcolor="#CCCCCC" bordercolor="#FFFFFF">
        <tr>
          <th align="center" colspan="4">Daftar harga kereta api</th></tr>
        <tr>
          <td>Kode / Kelas</td>
          <td align="center">3 - Economy</td>
          <td align="center">2 - Bussines</td>
      <td>1 - Executive</td>    </tr>
        <tr>
          <td>AP - Argo Parahrayangan</td><td align="center">35000</td><td align="center">40000</td>
          <td>45000</td></tr>
        <tr>
          <td>AD - Argo Dwipangga</td>
        <td align="center">55000</td>
        <td align="center">60000</td>
        <td>65000</td></tr>
        <tr>
          <td>AB - Argo Bromo</td>
      <td align="center">75000</td>
      <td align="center">80000</td>
      <td>85000</td></tr>
        <tr><td colspan="4">Jika dengan makan tambah 15000</td></tr>
    </table>
    
</body>
</html>

<h1>Cari Rata-rata Bilangan Setiap Mahasiswa</h1>
<?php
$n = $_POST['n'];
echo "<form method='post' action='proses.php'>";
for ($i = 0; $i <= $n-1; $i++)
{
 echo "Bil ke-".($i+1)." <input type='text' name='data".$i."' /><br>";
}
 echo "<input type='submit' name='submit' value='Submit' />";
 echo "<input type='hidden' name='n' value='".$n."' />";
echo "</form>";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Tabel dengan PHP</title>
</head>
<body>

<table border=1 >
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Latitude</th>
        <th>Longitude</th>
    </tr>
    <?php
    // Data dalam bentuk array asosiatif
    $data = array(
        array("No" => "1", "Nama" => "A", "Latitude" => "110.1","longitude" => "-7.2"),
        array("No" => "2", "Nama" => "B", "Latitude" => "110.2", "longitude" => "-7.2"),
    );

    // Loop melalui data untuk membuat baris tabel
    foreach ($data as $row) {
        echo "<tr>";
        echo "<td>" . $row['No'] . "</td>";
        echo "<td>" . $row['Nama'] . "</td>";
        echo "<td>" . $row['Latitude'] . "</td>";
        echo "<td>" . $row['longitude'] . "</td>";
        echo "</tr>";
    }
    ?>
</table>

<br>

<?php
$angka = 1;

while($angka <=7){
    echo "number $angka <br>";
    $angka++;   
}
?>
<br>

<?php
echo "<a href=test.php?nama=Merapi&alamat=Sleman>Gunung</a>";
?>

<br>

<html>
<body>
<form action="test.php" method="post">
Nama: <input type="text" name="nama" />
Umur: <input type="text" name="umur" />
<input type="submit" value="Kirim"/>
</form>
</body>
</html>

</body>
</html>

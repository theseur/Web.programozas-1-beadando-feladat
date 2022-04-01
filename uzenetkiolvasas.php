
<?php
try {
$pdo = new PDO('mysql:host=localhost;dbname=gyakorlat7', 'root', //adatbázis hozzáférés
'',array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
$pdo->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');
$utasitas = "select uzenet, kuld_ido, felhasznalonev from felhasznalok sort by kuld_ido desc"; //lekérdezés
$eredm = $pdo->query($utasitas);
}
catch (PDOException $e) {
echo "Hiba: ".$e->getMessage();
}
?>
<!DOCTYPE html>
<html>
 <head>
 <title>Kiíratás</title>
 <meta charset="utf-8">
<style>
table, td, tr {
border: 1px solid black;
}
</style>
 </head>
 <body>
<table>
<?php foreach ($eredm as $sor)
print "<tr><td>" . $sor['id'] . "</td>" . " <td>" .$sor['csaladi_nev'] . "</td>" . "<td>" .$sor['uto_nev'] . "</td>"  . "<td>" .$sor['bejelentkezes'] . "</td>" . "<td>" .$sor['jelszo'] . "</td></tr>"; //kiírás
?>
</table>
 </body>
</html>
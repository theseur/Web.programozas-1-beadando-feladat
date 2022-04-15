<?php
// Start the session
session_start();
?>


<?php
include("aside.html"); 

    if(isset($_POST['felhasznalo']) && isset($_POST['jelszo'])) {
        try {
            // Kapcsolódás
            
            
            // Felhsználó keresése
            $sqlSelect = "select id, csaladi_nev, uto_nev from felhasznalok where bejelentkezes = :bejelentkezes and jelszo = sha1(:jelszo)";
            $sth = $pdo->prepare($sqlSelect);
            $sth->execute(array(':bejelentkezes' => $_POST['felhasznalo'], ':jelszo' => $_POST['jelszo']));
            $row = $sth->fetch(PDO::FETCH_ASSOC);

            if($row) {
                $_SESSION['csn'] = $row['csaladi_nev']; 
                $_SESSION['un'] = $row['uto_nev']; 
                $_SESSION['login'] = $_POST['jelszo'];
                //echo "<h1> login:".$_SESSION['login']."</h1>";
              } 
        }
        catch (PDOException $e) {
            echo "Hiba: ".$e->getMessage();
        }      
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Belépés</title>
        <meta charset="utf-8">
    </head>
    <body>
        <?php if(isset($row)) { ?>
            <?php if($row) { ?>
                <h1>Bejelentkezett:</h1>
                Azonosító: <strong><?= $row['id'] ?></strong><br><br>
                Név: <strong><?= $row['csaladi_nev']." ".$row['uto_nev'] ?></strong>
            <?php } else { ?>
                <h1>A bejelentkezés nem sikerült!</h1>
                <a href="pelda.html" >Próbálja újra!</a>
            <?php } ?>
        <?php } ?>
    </body>
</html>
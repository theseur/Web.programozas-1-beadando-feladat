<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Galéria</title>
    <style type="text/css">
        label { display: block; }
    </style>
</head>
<body>

<?php
    // Alkalmazás logika:
    include('config.inc.php');
    $uzenet = array();  
   // echo "<h1> login:".$_SESSION['login']."</h1>";

    // Űrlap ellenőrzés:
    if(isset($_SESSION['login']))
    {
        if (isset($_POST['kuld'])) 
        {
            //print_r($_FILES);
            foreach($_FILES as $fajl) {
                echo "-".$fajl ["type"];
                if ($fajl['error'] == 4);   // Nem töltött fel fájlt
            
                elseif (!in_array($fajl['type'], $MEDIATIPUSOK))
                
                $uzenet[] = " Nem megfelelő típus: " . $fajl['name'];

                
                    
                elseif ($fajl['error'] == 1   // A fájl túllépi a php.ini -ben megadott maximális méretet
                            or $fajl['error'] == 2   // A fájl túllépi a HTML űrlapban megadott maximális méretet
                            or $fajl['size'] > $MAXMERET) 
                    $uzenet[] = " Túl nagy állomány: " . $fajl['name'];
                else {
                    $vegsohely = $MAPPA.strtolower($fajl['name']);
                    if (file_exists($vegsohely))
                        $uzenet[] = " Már létezik: " . $fajl['name'];
                    else {
                        move_uploaded_file($fajl['tmp_name'], $vegsohely);
                        $uzenet[] = ' Ok: ' . $fajl['name'];
                    }
                }
            }        
        }

    }
    else
    {
        echo "<h1>Nincs bejelentkezve!</h1>";
    }
    
    
       

    
    // Megjelenítés logika:
?>
    <h1>Feltöltés a galériába:</h1>
<?php
    if (!empty($uzenet))
    {
        echo '<ul>';
        foreach($uzenet as $u)
            echo "<li>$u</li>";
        echo '</ul>';
    }
?>
    <form action="index.php?page=feltotles" method="post"
                enctype="multipart/form-data">
        <label>Első:
            <input type="file" name="elso" required>
        </label>
        <label>Második:
            <input type="file" name="masodik">
        </label>
        <label>Harmadik:
            <input type="file" name="harmadik">
        </label>        
        <input type="submit" name="kuld">
      </form>    
</body>
</html>

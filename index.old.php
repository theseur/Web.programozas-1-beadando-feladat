<?php
// Start the session
header('Content-Type: text/html; charset=utf-8');
?>

<?php
include_once("connect.php");
if(!isset($_GET["page"]))
{
    echo 'fÖoldal';
     include("aside.html"); 
}
else
{
    if(($_GET["page"]=="kapcsolat"))
    {
        include_once("kapcsolat.html");
    }
    else if ($_GET["page"]=="kapcsolatkuldes")
    {
        include_once("php/kapcsolat.php");
    }
    else if($_GET["page"]=="uzenetkiolvasas")
    {
        include_once("uzenetkiolvasas.php");

    }
    else if($_GET["page"]=="video")
    {
        include_once("VideoTest.php");
    }
    else if($_GET["page"]=="galeria")
    {
        include_once("php/gallery.php");

    }
    else if($_GET["page"]=="feltotles")
    {
        include_once("php/feltolt.php");

    }
    else if($_GET["page"]=="map")
    {
        include_once("php/terkep.php");

    }

    else if($_GET["page"]=="belep" || $_GET["page"]=="regisztr")
    {
        include_once("pelda.html");

    }
    else if($_GET["page"]=="regisztral")
    {
        include_once("php/regisztracio.php");

    }
    else if($_GET["page"]=="belepes")
    {
        include_once("php/belepes.php");

    }
    else if($_GET["page"]=="kilep")
    {
        include_once("php/kilepes.php");

    }


}
?>

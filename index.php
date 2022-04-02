
<?php
include_once("connect.php");
if(!isset($_GET["page"]))
{
    echo 'fÖoldal';
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

}
?>
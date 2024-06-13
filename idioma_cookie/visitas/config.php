<?php
if (isset($_COOKIE['visitas'])) 
{ $visitas = $_COOKIE['visitas']+1; }
else {
    $visitas = 1;
    setcookie('visitas', $visitas);
}
setcookie('visitas', $visitas);
if (isset($_COOKIE['pagina']))
{
    $paginaAnt = $_COOKIE['pagina'];
} else { $paginaAnt = 'Ongi Etorri';}
setcookie('pagina', basename($_SERVER['PHP_SELF']), time() + 90*24*60*60);
?>

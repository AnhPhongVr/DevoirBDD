<?php
// Model
require 'modeleReq3.php';
try
{
    $req = getReq3();
    // View
    require 'vueReq3.php';
}
catch(Exception $e)
{
    echo '<html><body>Erreur ! ' . $e->getMessage() . '</body></html>';
}
?>
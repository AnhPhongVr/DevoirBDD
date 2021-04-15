<?php
// Model
require 'modeleReq3.php';
try
{
    $req = getReq3();
    // View
    require 'viewReq3.php';
}
catch(Exception $e)
{
    echo '<html><body>Erreur ! ' . $e->getMessage() . '</body></html>';
}
?>
<?php
// Model
require 'modeleReq1.php';
try
{
    $req = getReq1();
    // View
    require 'viewReq1.php';
}
catch(Exception $e)
{
    echo '<html><body>Erreur ! ' . $e->getMessage() . '</body></html>';
}
?>
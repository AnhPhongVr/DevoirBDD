<?php
// Model
require 'modeleReq2.php';
try
{
    $req = getReq1();
    // View
    require 'vueReq2.php';
}
catch(Exception $e)
{
    echo '<html><body>Erreur ! ' . $e->getMessage() . '</body></html>';
}
?>
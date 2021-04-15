<?php
// Model
require 'modelReq2.php';
try
{
    $req = getReq2();
    // View
    require 'viewReq2.php';
}
catch(Exception $e)
{
    echo '<html><body>Erreur ! ' . $e->getMessage() . '</body></html>';
}
?>
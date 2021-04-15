<?php
// Model
require 'modelReq5.php';
try
{
    $req = getReq5();
    // View
    require 'viewReq5.php';
}
catch(Exception $e)
{
    echo '<html><body>Erreur ! ' . $e->getMessage() . '</body></html>';
}
?>
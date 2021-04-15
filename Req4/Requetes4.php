<?php
// Model
require 'modelReq4.php';
try
{
    $req = getReq4();
    // View
    require 'viewReq4.php';
}
catch(Exception $e)
{
    echo '<html><body>Erreur ! ' . $e->getMessage() . '</body></html>';
}
?>
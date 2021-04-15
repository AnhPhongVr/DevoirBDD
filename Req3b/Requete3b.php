<?php
// Model
require 'modelReq3b.php';
try
{
    $req = getReq3b();
    // View
    require 'viewReq3b.php';
}
catch(Exception $e)
{
    echo '<html><body>Erreur ! ' . $e->getMessage() . '</body></html>';
}
?>
<?php
    $file = "img/NHresume.pdf";
    $fp = fopen($file, "r") ;
    
    header("Cache-Control: maxage=1");
    header("Pragma: public");
    header("Content-type: application/pdf");
    header("Content-Disposition: inline; filename=".$myFileName."");
    header("Content-Description: PHP Generated Data");
    header("Content-Transfer-Encoding: binary");
    header('Content-Length:' . filesize($file));
    ob_clean();
    flush();
    readfile($file);
    exit;
?>
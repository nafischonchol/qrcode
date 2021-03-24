<?php

    
    
    $tempDir = "qrimg/";
    
    $codeContents = "Nafis Chonchol#Tangail#ABL Head";
    $codeContents=urlencode($codeContents);
    $fileName = 'naf.jpg';
    $save=$tempDir.$fileName;
    $qr="https://chart.googleapis.com/chart?chs=150x150&cht=qr&chl=".$codeContents;
    copy($qr,$save);
    header("lOCATION:".$qr);
    
?>
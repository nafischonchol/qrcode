<?php

    include('qrlib.php');
    // include('config.php');

    // how to save PNG codes to server
    
    $tempDir = "qrimg/";
    
    $codeContents = "WOW#ABC-0000-1111#ABL Head";
    
    // we need to generate filename somehow, 
    // with md5 or with database ID used to obtains $codeContents...
    $fileName = 'WoW.png';
    
    $pngAbsoluteFilePath = $tempDir.$fileName;
    $urlRelativeFilePath = $tempDir.$fileName;
    
    QRcode::png($codeContents, $pngAbsoluteFilePath);
    echo 'File generated! '.$codeContents;
    echo '<hr />';
    
    echo 'Server PNG File: '.$pngAbsoluteFilePath;
    echo '<hr />';
    
    // displaying
    echo '<img src="'.$urlRelativeFilePath.'" />';
    
?>
<?php 
    // Store the file name into variable 
    $file = "uploads/documents/".$_GET['file']; 
    $filename = "uploads/documents/".$_GET['file']; 
    
    // Header content type 
    header('Content-type: application/pdf'); 
    
    header('Content-Disposition: inline; filename="' . $filename . '"'); 
    
    header('Content-Transfer-Encoding: binary'); 
    
    header('Accept-Ranges: bytes'); 
    
    // Read the file 
    @readfile($file); 
?>
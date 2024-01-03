<?php 
    if(!file_exists(__DIR__ . '/pasta_nova')) {
        mkdir(__DIR__ . '/pasta_nova');
    }
    
    rmdir(__DIR__ . '/pasta_nova');
?>
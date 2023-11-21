<?php
    extract($_REQUEST);
    if(isset($mod)){
    header('location: admins/index.php');
    
    }else
    header('location: site/index.php');

?>
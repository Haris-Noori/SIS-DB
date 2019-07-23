<?php include "header.php"; ?>

<?php

    if(function_exists('date_default_timezone_set'))
    {
        date_default_timezone_get('Asia/Islamabad');
    }

    $pldDate = date('d M,Y');
    $plTime = date('h:i a');

    echo 'Date is ' .$pldDate. '<br/>';
    echo $plTime ;

?>

<?php include "footer.php"; ?>
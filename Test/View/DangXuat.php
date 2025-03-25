<?php
    include 'Controller/ctrUser.php';
    $p = new ctrUser();
    $p->dangXuat();
    header("refresh: 0.5; url = index.php");
?>
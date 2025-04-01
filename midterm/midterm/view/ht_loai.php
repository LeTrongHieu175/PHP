<?php
    include 'controller/cTOP.php';
    $p = new cTop();
    $result = $p->show_all();
    while($num = $result->fetch_assoc()){
        echo '<a href="index.php?pages='.$num['maloai'].'">'.$num['ten'].'</a>';
        echo '<br>';
    }
    
?>
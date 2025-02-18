<?php
    $a=$_REQUEST['a'];
    $b=$_REQUEST['b'];
    $Tinh=$_REQUEST['Tinh'];
    switch($Tinh){
        case('Cong'):
            $kq=$a+$b;
            echo "a+b=$kq"; break;
        case('Tru'):
            $kq=$a-$b;
            echo "a-b=$kq"; break;
        case('Nhan'):
            $kq=$a*$b;
            echo "a*b=$kq"; break;
        case('Chia'):
            $kq=$a/$b;
            echo "a/b=$kq"; break;
    }
?>
<?php

    session_destroy();

    header('refresh: 1; url=index.php');
    exit('Bạn đã đăng xuất, đang chuyển hướng...');


?>
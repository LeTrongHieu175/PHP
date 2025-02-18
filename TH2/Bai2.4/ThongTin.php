<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Thong tin tac gia</h1>
    <?php
        $tg=$_REQUEST['tg'];
        switch($tg){
            case('An'):
                echo "Xin Chao Nguyen Van An - 33 tuoi!"; break;
            case('Tai'):
                echo "Xin Chao Nguyen Van Tai - 20 tuoi!"; break;
            case('Hai'):
                echo "Xin Chao Nguyen Van An - 50 tuoi!"; break;
        }
    ?>
</body>
</html>
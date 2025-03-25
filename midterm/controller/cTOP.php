<?php
    include 'model/mTOP.php';
    class cTOP{
        public function show_all(){
            $p = new mTOP();
            $result = $p->select_all();
            if($result->num_rows >0){
                while($num = $result->fetch_assoc()){
                    echo '<a href="index.php?pages='.$num['maloai'].'">'.$num['ten'].'</a>';
                    echo '<br>';
                }
            }
            else 
                echo 'không có sản phẩm';
        }
    }
?>
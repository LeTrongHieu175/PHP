<?php
    include 'model/mTOP.php';
    class cTOP{
        public function show_all(){
            $p = new mTOP();
            $result = $p->select_all();
            if($result->num_rows >0){
                return $result;
            }
            else 
                echo 'không có sản phẩm';
        }

        public function add_top($top){
            $p = new mTOP();
            $result = $p->insert_TOP($top);
            if($result)
                return true;
            else 
                return false;
        }
    }
?>
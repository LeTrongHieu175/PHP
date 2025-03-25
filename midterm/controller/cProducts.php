<?php
    include 'model/mProducts.php';
    class cProducts{
        public function show_all(){
            $p = new mProducts();
            $result = $p->select_all();
            if($result->num_rows >0){
                // while($num = $result->fetch_assoc()){
                //     echo $num['ten'], $num['gia'] ;
                //     echo '<br>';
                // }
                return $result;
            }
            else 
                echo 'không có sản phẩm';
        }

        public function show_id($id){
            $p = new mProducts();
            $result = $p->select_id($id);
            if($result->num_rows >0){
                // while($num = $result->fetch_assoc()){
                //     echo $num['ten'], $num['gia'] ;
                // }
                return $result;
            }
            else 
                return false;
        }

        public function show_name($name){
            $p = new mProducts();
            $result = $p->select_name($name);
            if($result->num_rows >0){
                // while($num = $result->fetch_assoc()){
                //     echo $num['ten'], $num['gia'] ;
                // }
                return $result;
            }
            else 
                return false;
        }
    }
?>
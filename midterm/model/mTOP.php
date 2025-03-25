<?php
    include_once 'mConnect.php';
    class mTOP{
        public function select_all(){
            $p = new mConnect();
            $conn = $p->connectDB();
            $sql ="select * from loai";
            if($conn)
                return $conn->query($sql);
            else
                return false;

            $p->disconnect($conn);
        }
    }
?>

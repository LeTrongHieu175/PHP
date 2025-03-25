<?php
    include_once 'mConnect.php';
    class mProducts{
        public function select_all(){
            $p = new mConnect();
            $conn = $p->connectDB();
            $sql ="select * from sanpham";
            if($conn)
                return $conn->query($sql);
            else
                return false;

            $p->disconnect($conn);
        }

        public function select_id($id){
            $p = new mConnect();
            $conn = $p->connectDB();
            $sql ="select * from sanpham where maloai = '$id'";
            if($conn)
                return $conn->query($sql);
            else
                return false;

            $p->disconnect($conn);
        }

        public function select_name($name){
            $p = new mConnect();
            $conn = $p->connectDB();
            $sql ="select * from sanpham where ten like '%".$name."%'";
            if($conn)
                return $conn->query($sql);
            else
                return false;

            $p->disconnect($conn);
        }

    }
?>
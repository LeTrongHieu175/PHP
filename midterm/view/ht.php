<?php
    include 'controller/cProducts.php';
    $p = new cProducts();
    if (isset($_SESSION['role']) && $_SESSION['role']== 1) {
        $products = $p->show_all();
    } else if (isset($_GET['pages'])) {
        $id = $_GET['pages'];
        $products = $p->show_id($id);
    }
    else if (isset($_GET['btntim'])) {
        $name = $_GET['tim'];
        $products = $p->show_name($name);
    }
    

    else 
        $products = $p->show_all();

    if ($products != false && $products->num_rows > 0) {
        echo '<div style="display: flex; flex-wrap: wrap; gap: 10px; ">';
        while ($num = $products->fetch_assoc()) {

        //     echo '<div style="width: 200px; height: 300px; border: 1px solid black; text-align: center;">'.
        //         '<img src="img/'. $num['img_dir'].'" style="width: 180px; height: 180px">'.
        //         '<p>'. $num['ten'] .'</p>'.
        //         '<p style="color: red; padding-bottom: 2px;">'. $num['gia'] .'</p>'.
        //         '</div>';
        echo '<div style="
                width: 220px; 
                height: auto; 
                border-radius: 10px; 
                border: 1px solid #ddd; 
                box-shadow: 2px 2px 10px rgba(0,0,0,0.1); 
                text-align: center; 
                padding: 10px; 
                background: #fff;
                transition: transform 0.3s;
                cursor: pointer;
            " onmouseover="this.style.transform=\'scale(1.05)\'" onmouseout="this.style.transform=\'scale(1)\'">
            
            <img src="img/'. $num['img_dir'] .'" style="
                width: 200px; 
                height: 200px; 
                object-fit: cover; 
                border-radius: 10px;
            ">
            
            <h3 style="
                font-size: 16px; 
                margin: 10px 0; 
                color: #333;
            ">'. $num['ten'] .'</h3>
            
            <p style="
                font-size: 18px; 
                font-weight: bold; 
                color: red; 
                margin-bottom: 5px;
            ">'. number_format($num['gia'], 0, ',', '.') .'đ</p>
        </div>';

        }
        echo '</div>';
    } else{
        echo "Không có sản phẩm";
    }



?>
<?php

require_once('../dbMysqli.php');

if(isset($_POST['data'])) {

    if(isset($_POST['fiter']) && $_POST['fiter'] == 'all') {
        $sql ="SELECT equip_name, equip_id FROM equip_tb";
        $rs = mysqli_query($link , $sql);
        $row = [];
        while($r = mysqli_fetch_assoc($rs)) {
            $row[] = $r;
        }

        echo json_encode($row) ;
    } else {
        $search = $_POST['data'];
        $sql ="SELECT equip_name, equip_id FROM equip_tb WHERE equip_name LIKE '%$search%'";
        $rs = mysqli_query($link , $sql);
        $r = mysqli_fetch_assoc($rs);
        echo json_encode($r) ;
    }
}

// foreach($_POST['name'] as $val) {
    
// }

// $old = '';

// $new = [
//     0 => '',
//     1 => '',
// ];
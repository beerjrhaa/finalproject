<?php

include 'dbMysqli.php';



$date = date( 'Y-m-d');
$query = "SELECT * FROM invipav_tb";

if ($result = $link->query($query)) {

    /* fetch associative array */
    while ($row = $result->fetch_assoc()) {
       if($row['invipav_datelast'] <= $date ){
	        $sql = "INSERT INTO `invipav_tb` (invi_status) "
                . "VALUES ('0')";
            $result = mysqli_query($link, $sql);

       }else{

       }
    }

    /* free result set */
    $result->free();
}

$date2 = date( 'Y-m-d');
$query2 = "SELECT * FROM invimonk_tb";

if ($result2 = $link->query($query2)) {

    /* fetch associative array */
    while ($row2 = $result2->fetch_assoc()) {
       if($row2['invimonk_date'] <= $date2 ){
	        $sql2 = "INSERT INTO `invimonk_tb` (invimonk_status) "
                . "VALUES ('0')";
            $result2 = mysqli_query($link, $sql2);

       }else{

       }
    }

    /* free result set */
    $result->free();
}

$date3 = date( 'Y-m-d');
$query3 = "SELECT * FROM inviqeuip_tb";

if ($result3 = $link->query($query3)) {

    /* fetch associative array */
    while ($row3 = $result3->fetch_assoc()) {
       if($row3['inviequip_date'] <= $date3 ){
	        $sql3 = "INSERT INTO `inviequip_tb` (inviequip_status) "
                . "VALUES ('0')";
            $result3 = mysqli_query($link, $sql3);

       }else{

       }
    }

    /* free result set */
    $result->free();
}





?>


foreach (Promotion::all() as $promotion){
            $time =  Carbon::now(); // เวลาปัจจุบันน
            $timeEnd = Carbon::parse($promotion->promotionEnd);  //fomat date

            if($timeEnd <= $time){  //check time
                  foreach(Products::where('productPromotionId',$promotion->id)->get() as $pro){ //update
                      $proUpdate = Products::findOrFail($pro->id);
                      $proUpdate->productPromotionId = null;
                      $proUpdate->save();
                  }
            }

        }

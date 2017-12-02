<?php

include 'dbMysqli.php';

	$sql3 = "SELECT * FROM user_tb JOIN member_tb
 			ON user_tb.mem_id = member_tb.mem_id ";
 	$result_product3 = mysqli_query($link, $sql3);
    $count_produc3 = mysqli_fetch_assoc($result_product3);

			$phpdate1 = strtotime($_POST['fistday']);
			$fistday = date( 'Y-m-d',$phpdate1);
			$phpdate2 = strtotime($_POST['lastday']);
			$lastday = date( 'Y-m-d',$phpdate2);

			$name = $count_produc3['mem_name'];
			$tel = $count_produc3['mem_tel'];
			$add = $count_produc3['mem_add'];
			$email = $count_produc3['mem_email'];
            $idPav = $_POST['idPav'];




	$sql_product2 = "SELECT * FROM invipav_tb WHERE invi_status != 2 ";
    $result_product2 = mysqli_query($link, $sql_product2);
    $count_product2 = mysqli_fetch_assoc($result_product2);

    $sql_product = "SELECT * FROM invipav_tb WHERE invipav_datefirst = '$fistday' OR invipav_datelast = '$lastday'";
    $result_product = mysqli_query($link, $sql_product);
    $count_product = mysqli_fetch_assoc($result_product);

          if($count_product){
               echo '<script language="javascript">';
				echo 'alert("ศาลานี้ถูกจองแล้ว")';
				echo '</script>';
          }else{
	          if($count_product2){
            $sql = "INSERT INTO `invipav_tb` (invipav_datefirst,invipav_datelast,pav_id) "
                . "VALUES ('$fistday', '$lastday', '$idPav' )";
            $result = mysqli_query($link, $sql);



             $sql2 = "INSERT INTO `member_tb` (mem_name,mem_tel,mem_add,mem_email) "
                . "VALUES ('$name', '$tel', '$add','$email')";
            $result2 = mysqli_query($link, $sql2);
			}
            if($result && $result2){
                header("Location: pav.php");
            }

          }

    //     $sql = "SELECT * FROM invipav_tb WHERE invipav_datefirst BETWEEN '.$fistday.' AND '.$lastday";

    //     $sql = "SELECT * FROM invipav_tb WHERE invipav_datefirst ='.fistday.' ";

    // $result = mysqli_query($link, $sql);
    // if ($count_product['COUNTPROD'] <= 0) {
    //    echo 'true';
    // } else {
    //     echo 'no ';
    // }




?>

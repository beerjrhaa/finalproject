<?php

include 'dbMysqli.php';

/*
	$sql3 = "SELECT * FROM user_tb JOIN member_tb
 			ON user_tb.mem_id = member_tb.mem_id ";
 	$result_product3 = mysqli_query($link, $sql3);
    $count_produc3 = mysqli_fetch_assoc($result_product3);
*/

			$phpdate1 = strtotime($_POST['date']);
			$date = date( 'Y-m-d',$phpdate1);
			$place = $_POST['place'];
/*
			$name = $count_produc3['mem_name'];
			$tel = $count_produc3['mem_tel'];
			$add = $count_produc3['mem_add'];
			$email = $count_produc3['mem_email'];
*/
            $idmonk = $_POST['idmonk'];
/*


		print_r ($_POST);
*/

    $sql_product = "SELECT * FROM invimonk_tb WHERE invimonk_date = '$date' ";
    $result_product = mysqli_query($link, $sql_product);
    $count_product = mysqli_fetch_assoc($result_product);


          if($count_product){
               echo '<script language="javascript">';
				echo 'alert("ศาลานี้ถูกจองแล้ว")';
				echo '</script>';
				echo "<meta http-equiv='refresh' content='3; url=showmonk.php'>";

          }else{
            $sql = "INSERT INTO `invimonk_tb` (invimonk_date,invimonk_place,monk_id) "
                . "VALUES ('$date', '$place', '$idmonk')";
            $result = mysqli_query($link, $sql);

/*
             $sql2 = "INSERT INTO `member_tb` (mem_name,mem_tel,mem_add,mem_email) "
                . "VALUES ('$name', '$tel', '$add','$email')";
            $result2 = mysqli_query($link, $sql2);

//             if($result && $result2){
//                header('location:monk.php'); */
//             }

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

<?php

include 'dbMysqli.php';



			$phpdate1 = strtotime($_POST['date']);
			$date = date( 'Y-m-d',$phpdate1);
			$place = $_POST['place'];
			$name = $_POST['name'];
			$tel = $_POST['tel'];
			$add = $_POST['add'];
			$email = $_POST['email'];
            $idequip =  $_POST['idequip'];
            $num =  $_POST['num'];



    $sql_product = "SELECT * FROM inviequip_tb WHERE inviequip_date = '$date' ";
    $result_product = mysqli_query($link, $sql_product);
    $count_product = mysqli_fetch_assoc($result_product);

          if($count_product){
               echo '<script language="javascript">';
				echo 'alert("ศาลานี้ถูกจองแล้ว")';
				echo '</script>';
				echo "<meta http-equiv='refresh' content='3; url=showmonk.php'>";

          }else{

              $sql3 = "INSERT INTO `inviequip_tb` (inviequip_date,inviequip_place,inviequip_num,equip_id) "
                  . "VALUES ('$date', '$place', '$num','$idequip')";
              $result3 = mysqli_query($link, $sql3);

            $sql4 = "UPDATE equip_tb SET equip_num=equip_num-$num WHERE equip_id ='$idequip'";   //หักของ
            $result4 = mysqli_query($link, $sql4);


            if($result3 && $result4){
               	echo "<meta http-equiv='refresh' content='1; url=equip.php'>";
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

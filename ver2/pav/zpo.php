<?php
header("Content-type:application/json; charset=UTF-8");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
    include_once '../dbMysqli.php';
if(isset($_GET['gData']) && $_GET['gData']|=""){
	$result = "SELECT * FROM `invipav_tb` as ip JOIN pav_tb as p ON ip.pav_id = p.pav_id";
	$rs = mysqli_query($link, $result);

 while($rs2=mysqli_fetch_object($rs)){
        $bgColor=null;
        if($rs2->invi_status=='Y'){
            if($rs2->pav_id=='9'){
                $bgColor="#336666";
            }else if($rs2->pav_id=='10'){
                $bgColor="#cc6633";
            }else if($rs2->pav_id=='11'){
                $bgColor="#993366";
            }else if($rs2->pav_id=='12'){
                $bgColor="#00e600";
            }
        }else if($rs2->invi_status=='N'){
            if($rs2->pav_id=='9'){
                $bgColor="#000033";
            }else if($rs2->pav_id=='10'){
                $bgColor="#cc3300";
            }else if($rs2->pav_id=='11'){
                $bgColor="#990066";
            }else if($rs2->pav_id=='12'){
                $bgColor="#00e600";
            }
        }else{
            $bgColor="#FF9900";
        }
        $json_data[]=array(
            "id"=>$rs2->invipav_id,
            "title"=>$rs2->invipav_datefirst,
            "start"=>$rs2->invipav_datelast,
            "end"=>$rs2->invipav_namedie,
            "description"=> "<div class='col-md-12'>
								<div class='row'>
									<div class='col-md-6'><p style='color:green;'>เวลาเริ่มประชุม</p></div>
									<div class='col-md-6' style='text-align: center;'><p'>".$rs2->invipav_datefirst."</p></center></div>
								</div>
							</div>
							<div class='col-md-12'>
								<div class='row'>
									<div class='col-md-6'><p style='color:red;'>เวลาเลิกประชุม</p></div>
									<div class='col-md-6' style='text-align: center;'><p'>".$rs2->invipav_datelast."</p></center></div>
								</div>
							</div>
							<div class='col-md-12'>
								<div class='row'>
									<div class='col-md-6'><p>ชื่อผู้ตาย</p></div>
									<div class='col-md-6' style='text-align: center;'><p'>".$rs2->invipav_namedie."</p></center></div>
								</div>
							</div>",
             "url"=> "cf_show.php?id=".$rs2->invipav_id,
             "color"=> $bgColor
        );
    }
}
$json_data=(isset($json_data))?$json_data:NULL;
$json= json_encode($json_data);
if(isset($_GET['callback']) && $_GET['callback']!=""){
echo $_GET['callback']."(".$json.");";
}else{
echo $json;
}
?>

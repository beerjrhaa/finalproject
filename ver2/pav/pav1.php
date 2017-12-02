<?php
header("Content-type:application/json; charset=UTF-8");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
    include "../database/db_tools.php";
    include "../connect.php";
    
if(isset($_GET['gData']) && $_GET['gData']|=""){
    $id = $_GET['gData'];

    $result = $db->findByPK('invipav_tb','pav_id',$id)->execute();
    
 while($rs=$result->fetch_object()){
        $bgColor=null;
        if($rs->invi_status=='Y'){
            $bgColor="#5cb85c";
        }elseif($rs->invi_status=='N'){
            $bgColor="#f0ad4e";
        }else{
            $bgColor="#FF9900";
        }
        $json_data[]=array(
            "id"=>$rs->invipav_id,
            "title"=>$rs->invipav_namedie,
            "start"=>$rs->invipav_datefirst,
            "end"=>$rs->invipav_datelast,
            "description"=> "<div class='col-md-12'>
								<div class='row'>
									<div class='col-md-6'><p style='color:green;'>เวลาเริ่มประชุม</p></div>
									<div class='col-md-6' style='text-align: center;'><p'>".$rs->invipav_datefirst."</p></center></div>
								</div>
							</div>
							<div class='col-md-12'>
								<div class='row'>
									<div class='col-md-6'><p style='color:red;'>เวลาเลิกประชุม</p></div>
									<div class='col-md-6' style='text-align: center;'><p'>".$rs->invipav_datelast."</p></center></div>
								</div>
							</div>
							<div class='col-md-12'>
								<div class='row'>
									<div class='col-md-6'><p>ชื่อผู้จอง</p></div>
									<div class='col-md-6' style='text-align: center;'><p'>".$rs->invipav_namedie."</p></center></div>
								</div>
							</div>",
             "url"=> "cf_show.php?id=".$rs->invipav_id,
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

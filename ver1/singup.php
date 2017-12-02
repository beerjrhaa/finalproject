<?
	require_once 'head.php';
?>

<!DOCTYPE html>
<html>
<head>
<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Flat Sign Up Form Responsive Widget Template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Meta tag Keywords -->
<!-- css files -->
<link href="csssingup/style.css" rel="stylesheet" type="text/css" media="all">
<link href="csssingup/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
<!-- //css files -->
<!-- online-fonts -->
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'><link href='//fonts.googleapis.com/css?family=Raleway+Dots' rel='stylesheet' type='text/css'>
</head>
<body>
<!--header-->
<!--//header-->
<!--main-->
<div class="main-agileits">
	<h2 class="sub-head">สมัครสมาชิก</h2>
		<div class="sub-main">
			<form action="#" method="post">
				<input placeholder="ชื่อ-นามสกุล" name="name" class="name" type="text" required="">
					<span class="icon1"><i class="fa fa-user" aria-hidden="true"></i></span><br>
				<input placeholder="เบอร์โทรศัพท์" name="phone" class="number" type="text" required="">
					<span class="icon2"><i class="fa fa-phone" aria-hidden="true"></i></span><br>
				<input placeholder="อีเมล" name="mail" class="mail" type="text" required="">
					<span class="icon3"><i class="fa fa-envelope" aria-hidden="true"></i></span><br>
				<input  placeholder="ที่อยู่" name="add" class="user" type="text" required="">
					<span class="icon5"><i class="fa fa-file" aria-hidden="true"></i></span><br>
				<input  placeholder="ชื่อผู้ใช้" name="user" class="user" type="text" required="">
					<span class="icon4"><i class="fa fa-user" aria-hidden="true"></i></span><br>
				<input  placeholder="รหัสผ่าน" name="pass" class="pass" type="password" required="">
					<span class="icon6"><i class="fa fa-unlock" aria-hidden="true"></i></span><br>

				<input type="submit" value="สมัครสมาชิก">
			</form>
		</div>
		<div class="clear"></div>
</div>
<!--//main-->

<!--footer-->
<!--//footer-->

</body>

<?
		if($_POST){
		 try{

			$sql1="SELECT MAX(mem_id) FROM member_tb ";

			$stmt1=$db->prepare($sql1);
			$stmt1->execute();
			$data=$stmt1->fetch();
			$id=$data[0];
			if($id=$data[0]){
				$id+++1;
			}


			$name=$_POST['name'];
			$phone=$_POST['phone'];
			$mail=$_POST['mail'];
			$add=$_POST['add'];
			$user=$_POST['user'];
			$pass=$_POST['pass'];

			$sql="INSERT INTO user_tb (user_user,user_pass,mem_id)
				  VALUES (:user,:pass,:id)";
			$stmt=$db->prepare($sql);
			$param[':user']=$user;
			$param[':pass']=$pass;
			$param[':id']=$id;
			$stmt->execute($param);

			$sql2="INSERT INTO member_tb (mem_name,mem_tel,mem_add,mem_email)
				  VALUES (:name,:phone,:add,:mail)";
			$stmt2=$db->prepare($sql2);
			$param2[':name']=$name;
			$param2[':phone']=$phone;
			$param2[':add']=$add;
			$param2[':mail']=$mail;
			$stmt2->execute($param2);

			echo "<meta http-equiv='refresh' content='3; url=login.php'>";

		}
			catch (PDOException $ex) {
                echo 'ERROR -> ' . $ex->getMessage();
            }
	}

?>
</html>

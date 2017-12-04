<!doctype HTML>
<html>
	<head>
		<title>ระบบจองห้องประชุม</title>
		<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
        <link rel="stylesheet" href="CSS/bootstrap.css">
        <link rel="stylesheet" href="CSS/datepicker.css">
		<link rel="stylesheet" href="CSS/dataTables.bootstrap4.css">
		<link rel="stylesheet" href="CSS/fullcalendar.min.css">
        <link rel="stylesheet" href="CSS/main.css">
        <link rel="stylesheet" href="CSS/jquery.datetimepicker.css">
        <link rel="stylesheet" href="CSS/fullcalendar.print.min.css" media="print">
        <link rel="stylesheet" href="CSS/print.css" media="print">
		<?php include_once 'inc_js.php';
    		  include_once 'database/db_tools.php';
              include_once 'connect.php';
              include_once 'form/main_form.php';
              include_once 'form/gridview.php';
              include_once 'database/database.php';
             ?>
	</head>
	<script type="text/javascript">
 $("#myCarousel").carousel({
     interval: 2000;
 });
</script>
<body>
	<div class="warpper">
        <div class="container">
            <div class='col-md-12'>
                <img class='w-100' src="images/calendarheader.jpg">
	        </div>
			<div class='col-md-12'>
				<?php include_once 'cfm_menu.php';?>
			</div> <!--END-MENU-->
			<div class='col-md-12'>
				<?php include_once 'cfm_content.php';?>
			</div>
		</div>
	</div>
</body>

		</html>

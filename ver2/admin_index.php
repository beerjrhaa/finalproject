<?php
	session_start();
	ob_start();
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html" charset="utf-8">
     <?php
            include_once 'inc_js.php';
            include_once 'database/db_tools.php';
            include_once 'connect.php';
            include_once 'database/file_manager.php';
            include_once 'form/main_form.php';
            include_once 'form/gridview.php';
            include_once 'dbMysqli.php';
            include_once 'database/database.php';
        ?>
        <link rel="stylesheet" href="CSS/bootstrap.css">
		<link rel="stylesheet" href="CSS/jquery.dataTables.css">
        <link rel="stylesheet" href="CSS/datepicker.css">
        <link rel="stylesheet" href="CSS/jquery.mapify.css">
        <link rel="stylesheet" href="CSS/jquery.datetimepicker.css">
        <link rel="stylesheet" href="CSS/main.css">
        <link rel="stylesheet" href="CSS/print.css" media="print">
        <title>Intranet</title>
    </head>
    <body>
           <div class="wrapper">
           		<div class="container">
					<div class="row">
						<div class='col-md-12'>
							<?php include_once 'admin_content.php';?>
						</div>
					</div>
				</div>
			</div>
    </body>

</html>
<script>
$(function() {
    $( "#accordion" ).accordion();
  });
</script>

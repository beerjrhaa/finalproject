<!DOCTYPE html>
<?
	$pav_id = $_GET['pav_id'];
		$sql = "SELECT * FROM pav_tb WHERE pav_id =$pav_id";
		$stmt=$db->prepare($sql);
		$stmt->execute();
		$rows = $stmt->rowCount();
		$pav=$stmt->fetch();


?>
<input type='hidden' id='id' name="id" value="<?=$pav_id;?>">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ระบบบริหารจัดการวัดสุคันธาราม</title>
    <link href="CSS/bootstrap_old.css" type="text/css" rel="stylesheet" />
    <link href="CSS/fullcalendar.min.css" type="text/css" rel="stylesheet" />
        <script>

        $(document).ready(function() {
	        var id =($('#id').val());
	        console.log(id);
            $('#calendar').fullCalendar({
                header: {
                    left: '',
                    center: 'prev title next',
                    right: 'listDay,listWeek,month'
                },
                eventClick:  function(event, jsEvent, view) {
                    $('#modalTitle').html(event.title);
                    $('#modalBody').html(event.description);
                    $('#eventUrl').attr('href',event.url);
                    $('#fullCalModal').modal();
                    return false;
                },
                views: {
				listDay: { buttonText: 'list day' },
				listWeek: { buttonText: 'list week' }
			},
                events:
                {
                    url: 'pav/pav1.php?gData=' + id,
	            },
                timeFormat: 'H:mm'
            });
            });

    </script>
</head>

    <div class="container">
        <div class="row">
			<div class="col-md-12" style="margin-top:16px;margin-bottom:16px;">
				<div class="row">
					<div class="col-md-3">
						<div class="row">
							<div class="col-md-12" style="margin-top:8px;"></div>
							<div class="col-md-12" style="margin-top:67%;">
								<div class="row">
									<div class="col-md-5"></div>
									<a href="cf_index.php?url2=cf_addday.php&pav_id=<?=$pav_id;?>" class="btn btn-success col-md-7" style="padding-top: 79px;padding-bottom: 79px;">คลิกเพื่อจอง</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<h4><?=$pav['pav_name']?></h4>
						<div id="calendar"></div>
					</div>
					<div class="col-md-3"></div>
				</div>
			</div>
		</div>
	</div>

<?php include("cf_viewdetail.php")?>

<script>

</script>

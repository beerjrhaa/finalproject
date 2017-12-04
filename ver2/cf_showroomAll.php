<!DOCTYPE html>
<head>
    <link href="CSS/bootstrap_old.css" type="text/css" rel="stylesheet" />
    <link href="CSS/fullcalendar.min.css" type="text/css" rel="stylesheet" />
    <link rel="stylesheet" href="CSS/cssforcfindex.css">
        <script>
        $(document).ready(function() {
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
                    url: 'pav/zpo.php?gData=1',
                },
                eventRender: function(event, element) {
                     if(event.icon){
                        element.find(".fc-title").prepend("<i class='fa fa-"+event.icon+"'></i>");
                     }
                    },
                timeFormat: 'H:mm'
            });
        });
    </script>
</head>
        <div class="col-md-12">
			<div class="col-md-2"></div>
			<div class="col-md-8" style="margin-top:16px;margin-bottom:16px;">
				<div id="calendar"></div>
            </div>
            <div class="col-md-2"></div>
        </div>
<?php include("cf_viewdetail.php")?>

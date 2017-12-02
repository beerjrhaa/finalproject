<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link rel="stylesheet" href="CSS/bootstrap.css">
        <link rel="stylesheet" href="CSS/jquery-ui.css">
        <!--<link rel="stylesheet" href="CSS/main.css">-->
        <link rel="stylesheet" href="CSS/main.css">
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
        <?php  include_once 'inc_js.php';
    		  include_once 'database/db_tools.php';
              include_once 'connect.php';
              include_once 'form/main_form.php';
              include_once 'form/gridview.php';
              include_once 'database/database.php';
             ?>
    </head>
    <body>
        <div class="wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                	<header><img src="images/Header.jpg" style="width: 100%;"></header>
                </div>
                <div class="col-md-12">
                <div class="row">
                    <div class="col-md-3">
                    <?php include_once 'menu_main.php';
                          include_once 'login.php';
                    ?>
                    </div>
                    <div class="col-md-9"><?php include_once 'content.php';?></div>
				</div>
                </div>
                <div class="col-md-12 indexftp">
                    <center>
                        <div class="indexft"><a href="http://www.zoothailand.org" target="_blank"><img src="images/Logo/ZPO.png"/></a></div>
                        <div class="indexft"><a href="http://www.dusitzoo.org" target="_blank"><img src="images/Logo/Dusitzoo.png"></a></div>
                        <div class="indexft"><a href="http://kkopenzoo.com/newversion_index.php"><img src="images/Logo/KKOzoo.png"></a></div>
                        <div class="indexft"><a href="http://www.chiangmaizoo.com" target="_blank"><img src="images/Logo/chiangmai.png"></a></div>
                        <div class="indexft"><a href="http://www.koratzoo.org" target="_blank"><img src="images/Logo/Nakhonrachsimazoo.png"></a></div>
                        <div class="indexft"><a href="http://www.songkhlazoo.com" target="_blank"><img src="images/Logo/Songkhlazoo.png"></a></div>
                        <div class="indexft"><a href="http://www.ubon-zoo.com" target="_blank"><img src="images/Logo/Ubonzoo.png"></a></div>
                        <div class="indexft"><a href="http://www.khonkaenzoo.com" target="_blank"><img src="images/Logo/KKzoo.png"></a></div>
                        <div class="indexft"><a href="#" target="_blank"><img src="images/Logo/surin.png"></a></div>
                    </center>
                </div>
            </div>
        </div> <!--end container-->
        </div> <!--end wrapper-->
    </body>

		<script type="text/javascript">
    //Modal
$('#Modal').on('show.bs.modal', function (event) {
          var button = $(event.relatedTarget) // Button that triggered the modal
          var recipient = button.data('whatever') // Extract info from data-* attributes
          var modal = $(this);
          var dataString = 'id=' + recipient;

            $.ajax({
                type: "GET",
                url: "news_getnewsdetail.php",
                data: dataString,
                cache: false,
                success: function (data) {
                    console.log(data);
                    modal.find('.ct').html(data);
                },
                error: function(err) {
                    console.log(err);
                }
            });
    })
</script>
</html>

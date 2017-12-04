<?php if (!empty($_SESSION['user_name'])): ?>
<div class="row">
    <div class="col-md-12">
    <nav class="navbar navbar-expand-lg navbar-dark info">
    <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav col-md-12">
            <li class="nav-item active menuup">
                <a class="nav-link" href="#">E-Service System</a>
            </li>
            <li class="nav-item addmenu">
                <a href="admin_index.php?url=admin_edit_user.php&id=<?php echo $_SESSION['user_id'];?>"><?php echo "คุณ".$_SESSION['user_name']." ".$_SESSION['user_last'];?></a>
            </li>
            <li class="nav-item addmenu">
                <a href="logout.php">ออกจากระบบ</a>
            </li>
        </ul>
    </div>
    </nav>
    </div>
<div class="col-md-12 printdisplaynone">
    <a class="btn menutop" role="button" data-toggle="collapse" href="#collapseMenu" aria-expanded="false" aria-controls="collapseMenu" style="width: 100%; margin-top: 10px;background-color: #009ACD;">
        คลิกเพื่อเลือกโปรแกรมที่ต้องการ
    </a>
    <div class="collapse" id="collapseMenu">
		<div class='col-md-12' style="padding-left:25%;padding-right:25%;">
			<?php if($_SESSION['user_drive_allow'] == 1){ ?>
				<div class='menubox'>
					<a href='zdc'>
						<img src='images/icons/data.png'>
					</a>
				</div>
			<?php }
				  if($_SESSION['user_news_allow'] == 1){ ?>
				<div class='menubox'>
					<a href="admin_index.php?url=admin_news_index.php&user_id=<?php echo $_SESSION['user_id']; ?>">
						<img src='images/icons/News.png'>
					</a>
				</div>
			<?php }
				if($_SESSION['user_confer_allow'] == 1){ ?>
				<div class='menubox'>
					<a href="admin_index.php?url=admin_cf_index.php">
						<img src='images/icons/conference.png'>
					</a>
				</div>
			<?php }
				if($_SESSION['user_service_allow'] == 1){ ?>
				<div class='menubox'>
					<a href='admin_index.php?url=admin_cs_index.php'>
						<img src='images/icons/comservice.png'>
					</a>
				</div>
			<?php }
				if($_SESSION['user_touristreport_allow'] == 1){ ?>
				<div class='menubox'>
					<a href='admin_index.php?url=admin_trs_index.php'>
							<img src='images/icons/trsreport.png'>
					</a>
				</div>
			<?php }
    			if($_SESSION['user_admin_allow'] == 1){ ?>
				<div class='menubox'>
					<a href='admin_index.php?url=admin_km_index.php'>
						<img src='images/icons/knowledge.png'>
					</a>
				</div>
			<?php }
				if($_SESSION['user_admin_allow'] == 1){ ?>
				<div class='menubox'>
					<a href='admin_index.php?url=admin_user_index.php'>
						<img src='images/icons/admincs.png'>
					</a>
				</div>
			<?php } ?>
		</div>
    </div>
</div>
</div> <!-- end row -->
<?php endif; ?>

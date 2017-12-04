<?php if (!empty($_SESSION['user_id'])): ?>
<div class="row">
    <div class="col-md-12">
    <nav class="navbar navbar-expand-lg navbar-dark info">
    <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav col-md-12">
            <li class="nav-item active menuup">
                <a class="nav-link" href="#">ระบบบริหารจัดการวัดสุคันธาราม</a>
            </li>
            <li class="nav-item addmenu">
                <a href="admin_index.php?url=admin_edit_user.php&id=<?php echo $_SESSION['user_id'];?>"><i class="glyphicon glyphicon-user"></i> <?php echo "คุณ".$_SESSION['user_user'];?></a>
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
    <div class='col-md-12 menuicon'>
        <div class='menubox'>
            <a href='admin_index.php?url=admin_hs_index.php'>
                <img src='images/icons/News.png'>
			</a>
		</div>
		 <div class='menubox'>
            <a href='admin_index.php?url=admin_im_index.php'>
                <img src='images/icons/News.png'>
			</a>
		</div>
        <div class='menubox'>
            <a href='admin_index.php?url=admin_p_index.php'>
                <img src='images/icons/conference.png'>
        	</a>
		</div>
        <div class='menubox'>
            <a href='admin_index.php?url=admin_m_index.php'>
                <img src='images/icons/comservice.png'>
        	</a>
		</div>
        <div class='menubox'>
            <a href='admin_index.php?url=admin_e_index.php'>
                    <img src='images/icons/trsreport.png'>
        	</a>
		</div>
    </div>
    </div>
    </div>
</div> <!-- end row -->
<?php endif; ?>

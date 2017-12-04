<?php if (!empty($_SESSION['user_id'])):
?>
<div class="row">
<div class="col-md-12">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="admin_index.php?url=admin_p_index.php">ระบบจัดการการจองศาลา</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">รายการศาลา</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="admin_index.php?url=admin_cf_index.php&url2=cf_showinvi_pav.php&pav_id=9">ศาลาสามัคคีราชวัตรสวัสดี</a>
                            <a class="dropdown-item" href="admin_index.php?url=admin_cf_index.php&url2=cf_showinvi_pav.php&pav_id=12">ศาลา2 </a>
                            <a class="dropdown-item" href="admin_index.php?url=admin_cf_index.php&url2=cf_showinvi_pav.php&pav_id=11">ศาลาเสงี่ยม</a>
                            <a class="dropdown-item" href="admin_index.php?url=admin_cf_index.php&url2=cf_showinvi_pav.php&pav_id=10">ศาลาดวงแก้ว</a>
                    </div>
                </li>
        </ul>
      </div>
      </nav>
    </div>
  </div>

<?php endif; ?>

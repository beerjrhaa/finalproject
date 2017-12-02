<?
		require_once 'head.php';

?>
      <link rel="stylesheet" href="csslogin/style.css">


</head>

<body>
  <body>
<div class="container">
	<section id="content">
		<form action="check_login.php" method="post">
			<h1>เข้าสู่ระบบ</h1>
			<div>
				<input type="text" placeholder="Username" required="" id="username" name="username"/>
			</div>
			<div>
				<input type="password" placeholder="Password" required="" id="password" name="password"/>
			</div>
			<div>
				<input type="submit" value="Log in" />
				<a href="singup.php">สมัครสมาชิก</a>
			</div>
		</form><!-- form -->
		<div class="button">
		</div><!-- button -->
	</section><!-- content -->
</div><!-- container -->
</body>

<!--     <script  src="js/index.js"></script> -->

</body>
</html>

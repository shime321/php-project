<?php if (!isset($_SESSION)) {
	session_start();
} ?>
<!DOCTYPE html>
<html>

<head>
	<title></title>
	<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
	<link href="../css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script type="application/x-javascript">
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--js-->
	<script src="js/jquery.min.js"></script>

	<!--/js-->

</head>

<body>
	<!--header-->
	<!--sticky-->

	<?php
	if ($_SESSION['loginstatus'] == "") {
		header("location:loginform.php");
	}
	?>

	<!--/sticky-->
	<div style="box-shadow:1px 1px 20px black; min-height:100vh; padding-top: 40vh; " class="container h-100 d-flex">
		<div align="center">
			<h1>Welcome!</h1>
		</div>
		<?php include('left.php'); ?>

		<!-- <div class="col-sm-9" align="center">
	<h1>WELCOME TO ADMIN PANEL</h1>
</div> -->


	</div>
</body>

</html>
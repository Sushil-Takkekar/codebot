<?php
	
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * @author Sushil
 */	
?>
<?php
	session_start();
	if(isset($_SESSION['vo_id']))
	{
		$makeDisable='disabled';
	}else{	$makeDisable=' ';	}
?>
<html>
	<head>
		<?php include 'head_css.php';	?>
	</head>
	<body>
		<?php include 'header.php'; ?>

		<div class="container">
			<div class="row">
				<div class="col s6 center-align">
					<?php include 'login.php';	?>
				</div>
				<div class="col s6 center-align">
					<?php include 'register.php';	?>
				</div>
			</div>
		</div>

		<?php include 'head_js.php'; ?>
	</body>
</html>
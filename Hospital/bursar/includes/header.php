<style type="text/css">
a {
    text-decoration: none !important;
    color: blue;
}</style>
<div class="header">
	<div class="headerleft">
		<b><a href="index.php">Hospital Management System</a></b>
	</div>
	<div class="headerright">
		<b>
			<?php
			require '../includes/connect.php';
			require '../includes/users.php';
			bursardetails();
			 ?>
		</b>
	</div>
</div>

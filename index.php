<!DOCTYPE html>
<html lang="en">

<?php require_once "elements/head.php"; ?>


<body class="sb-nav-fixed">

	<?php include_once "elements/nav.php"; ?>

	<div id="layoutSidenav">
	
		<?php include_once "elements/sidenav.php"; ?>
		
		<div id="layoutSidenav_content">
		
			<main>
			
				<div class="container-fluid px-4">
				
					<?php
					@$page = $_GET['page'];
					switch($page){
						default: include_once "pages/dashboard.php"; break;
					}
					?>

				</div>
				
			</main>
			

			<?php include_once "elements/footer.php"; ?>

		</div>
	</div>


	<?php include_once "elements/script-bottom.php"; ?>

</body>
</html>

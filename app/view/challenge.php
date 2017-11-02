<!doctype html>
<html lang="en">
<?php require_once( 'partials/head.php' ); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script src="js/load.js" id="races">
<?php $json = file_get_contents('http://ergast.com/api/f1/current.json'); echo $json;?>
</script>
<body class="<?php echo $bodyclass; ?>">
	<div class="wrapper">
		<div class="page">
			<header class="header">
				<?php require_once( 'partials/page_header.php' ); ?>
			</header>
			
			<div class="main-container">
				<!-- Page Content -->
				<h1 class="page-header">Formula 1 Fixture List 2017</h1>

				<div class="page-data">
					<div class="control-wrapper">
						<button class="btn-load">Load Data</button>
					</div>
					<div class="loader"></div>
					<div class="data-table-wrapper">
						<table class="data-table">
							<thead>
							<tr>
								<td>Round</td>
								<td>Date</td>
								<td>Time</td>
								<td>Grand Prix</td>
								<td>Circuit</td>
								<td>Location</td>
							</tr>
							</thead>
							<tbody>
							</tbody>
						</table>
					</div>
					<div class="car-container">
					<img src="assets/design/images/img_286x138px.png" id="bottomcar" />
					</div>
				</div>
			</div>
			<div class="footer-container">
				<?php require_once( 'partials/page_footer.php' ); ?>
			</div>
		</div>
		<!--
	</div>
	<div class="spinner" style="display:none;">
	</div>-->
</body>
</html>
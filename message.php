<div class="row justify-content-center mt-5 mb-1">
	<?php $counter = 0;
	if (isset($_GET['msg'])) { ?>
		<section class="container">
			<div class="row justify-content-center">
			<div class="alert alert alert-success alert-dismissible fade show card" id="message">
				<?php echo $_GET['msg']; ?>
			</div>
			</div>
			
		</section>
	<?php } ?>
	<?php if (isset($_GET['error'])) { ?>
		<div class="col-5 alert error alert-danger alert-dismissible fade show card" id="message">
			<?php echo $_GET['error']; ?>
		</div>
	<?php } ?>
</div>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script>
	$(document).ready(function() {
		$('#message').fadeIn('slow', function() {
			$('#message').delay(5000).fadeOut();
		});
	});
</script>
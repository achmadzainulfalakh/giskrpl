<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<hr />
	<footer>
		<div class="container">
			<div class="footer">
				<p>Copytight &copy <?php print date("Y")?> - Dibangun Oleh <a href="http://facebook.com/achmadzainulfalakh">Achmad Zainul Falakh</p>
			</div>
		</div>
	</footer>
	
	<!--Reset/hapus semua data peserta pendaftar-->
	<script>
	$(document).ready(function(){
		$("#resetBtn").click(function(){
			$("#resetModal").modal();
		});
	});
	</script>
	
	<?php //print $script?>
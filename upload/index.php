<?php
	require '../functions/upload.php';
	require '../functions/projects.php';
	include '../partials/header.php';
	include '../partials/top_nav_upload.php';
?>

<?php
	if (isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST") {
		setProjects();
		uploadFiles();
	}
?>

<?php	
	if (isset($_GET['delete'])) { ?>deleteProject($_GET['delete']); ?>
		<script type="text/javascript">
			window.location = "../projects_overview/";
		</script>
<?php } ?>
<div>
<br><br>
<br><br>
		<div class="upload-content">
			<form method="post" enctype="multipart/form-data">
				<h2>Hand-In Module 3 project portal eal | Documentation and working prototype</h2> <br>
				<h4><i class="fa fa-exclamation-circle" aria-hidden="true"></i> Due until DD/MM/mm/hh</h4><br>
					<div class="box">
						<input type="file" id="files" name="files[]"  class="inputfile" data-multiple-caption="{count} files selected" multiple />
						<label for="files"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg><span>Click to choose files&hellip;</span></label>
					</div>
					<input type="text" name="proj_title" placeholder="Title" id="proj-title">
					<input type="text" name="proj_tags" placeholder="Keywords" id="proj-tags"><br>
					<input type="text" name="proj_description" placeholder="Description" id="proj-description">
					<textarea placeholder="Executive summary" name="proj_executive" id="proj-executive" ></textarea>
					<div class="final-uploads">
						<input type="file" name="proj_cover" id="proj_cover">
						<label for="proj_cover" id="proj_cover_upload">Upload cover</label>
						<select name="proj_owner" id="proj_owner">
							<option value="" disabled selected>Choose Owner</option>
							<option value="Eduard Carmocanu">Eduard Carmocanu</option>
							<option value="Peter Mork">Peter Mork</option>
							<option value="Line Brygger">Line Brygger</option>
							<option value="Rikke Pedersen">Rikke Pedersen</option>
						</select>
					</div>
					<br>
					<input type="submit" name="submit" value="Hand-in" id="submit">
				</form>
		</div>
	</div>
<?php include '../partials/footer.php';?>
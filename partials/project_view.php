<div class="cover-container" style="background-image: url(<?php echo '\'../../upload/uploads/' . $projects_info[$_GET['project']]['proj_cover'] . '\'';?>)">
</div>
<div class="project-view-content-container">
	<h1> <?php echo $projects_info[$_GET['project']]['proj_title'];?> </h1>
	<h5><span class="keyword"><?php echo $projects_info[$_GET['project']]['proj_tags'];?></span></h5><br>
	<h5><span class="lighter"><?php echo $projects_info[$_GET['project']]['proj_upload_date'];?></span></h5><br>
	<h4><span class="lighter">Owners: <?php echo $projects_info[$_GET['project']]['proj_owner'];?></span></h4><br>
	<p><h3>Description</h3><br><?php echo $projects_info[$_GET['project']]['proj_description'];?></p><br>
	<p><h3>Executive Summary</h3><br><?php echo $projects_info[$_GET['project']]['proj_executive'];?></p>
	<br>
	<br>
	<a href="mailto:example@mail.com" class="btn contact-button">Contact Owner <i class="fa fa-envelope" aria-hidden="true"></i></a>
	<a href="#" class="btn download-button">Download project <i class="fa fa-download" aria-hidden="true"></i></a>
</div>
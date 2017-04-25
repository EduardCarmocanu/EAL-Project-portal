<div class="over-proj">
	<div class="overview-proj">
		<h3 class="overview-proj-title"><?php echo $project_info['proj_title']; ?></h3>
		<h4><span class="lighter">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $project_info['proj_upload_date'] ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></h4>
		<a href="?delete=<?php echo $index; ?>" onclick="window.location = '/projects_overview'">delete project</a>
	</div>
	<div class="view-proj-button">
		<a href="project-view/?project=<?php echo $index . '&prev=../' ?>" class="hand-in">View Project</a>
	</div>
</div>
<div class="card proj-card">
	<a href="projects_overview/project-view/?project=<?php echo $index . '&prev=/module-3-portal' ?>">
		<div class="project-cover" style="background-image: url(<?php echo '\'upload/uploads/' . $project_info['proj_cover'] . '\'' ?>)">

		</div>
		<div class="project-info">
			<h2 class="proj-card-title"><?php echo $project_info['proj_title']?></h2><br>
			<h5><span class="keyword"><?php echo strtoupper($project_info['proj_tags'])?></span></h5><br>
			<h5><span class="lighter upload-date"><?php echo $project_info['proj_upload_date']?></span></h5><br>
			<h4><span class="lighter"><?php echo $project_info['proj_owner']?></span></h4><br>
			<p><?php echo $project_info['proj_description']?></p>
		</div>
	</a>
</div>

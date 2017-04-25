<?php 
require 'functions/projects.php';
include 'partials/header.php';
include 'partials/top_nav.php';
include 'partials/side_menu.php';

$projects = getProjects('projects_data.json');
$index = 0;
?>
		
		<div id="feed-content-container">
		
			<div class="project-cards-container">
			<div id="welcome">
				<h1>Welcome to the EAL project portal<i class="fa fa-times" id="close" aria-hidden="true" style="float: right; font-size: 0.7em; margin-top: 0.3em" onclick="closeWelcome()"></i></h1>
				<p>
					Here you can see all the project that our students are working on and get in contact with them if you are looking forward to a collaboration.<br>
					Feel free to browse through the available projects and find what sparks your interest
				</p>
			<br>
		</div>
				<?php
					foreach ($projects as $project => $project_info) {
						include 'partials/project_card.php';
						$index++;
					}
					unset($index);
				?>


			</div>
<!-- 			<div class="news-container">


					
			</div> -->
		</div>
		
<?php include 'partials/footer.php'; ?>
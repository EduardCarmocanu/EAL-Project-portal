<?php 
require '../functions/projects.php';
include '../partials/header.php';
include '../partials/top_nav_upload.php'; 

$projects = getProjects('../projects_data.json');
$index = 0; ?>
<?php	
	if (isset($_GET['delete'])) {
		deleteProject($_GET['delete']); ?>
<!-- 		<script type="text/javascript">
			window.location = "/module-3-portal/projects_overview/";
		</script> -->
<?php } ?>
	
	<div id="overview-container">
		<div class="user-details">
			<div class="user-info user-image" style="background-image: url('../assets/images/user_placeholder.jpg');">
				
			</div>
			<div class="user-info user-general-info">
				<h3>Kristian Lillevang</h3>
				<h3>MMD student</h3>
			</div>
			<div class="user-info user-bio">
				<h4>Bio</h4><br>
				<p>
					Former HHX student from Odense Tekniske Skole from 2015. <br><br>
					Winner of Legat from Odense Tekniske skole 2015.<br><br>
					Currently MMD Student at EAL 4th Semester. <br><br>
					Currently working parttime at MIR Odense http://www.mobile-industrial-robots.com/ as design and code developer. 
				</p>
			</div>
			<div class="user-info user-contact">
				<h4>Contact information</h4><br>
				<p>E-mail: kristianlillevang@gmail.com</p>
				<p>Telefon: +45 21 20 45 71</p>
				<p>Website: kristianlillevang.dk</p>
			</div>
		</div>
		<div class="proj-overview">
			<div class="overview-header">
				<h2>Projects overview</h2>	
			</div>
			<div class="overview">
				<div class="over-proj overview-proj-hand-in">
					<div class="hand-in-info">
						<h3>M3-project-portal</h3>
						<h4><span class="lighter">DD/MM/YYYY</span></h4>
					</div>
					<div class="hand-in-button-container">
						<a href="../upload/?prev=../projects_overview" class="hand-in">Hand-in</a>
					</div>
				</div>

				<?php 
					foreach ($projects as $project => $project_info) {
						include '../partials/project_overview.php';
						$index++;
					}
					unset($index);
				?>

			</div>
		</div>
	</div>

<?php include '../partials/footer.php'; ?>
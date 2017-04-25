<?php
require '../../functions/projects.php';
include '../../partials/header.php';
include '../../partials/top_nav_upload.php'; 
$projects_info = getProjects('../../projects_data.json');
?>

<?php
	include '../../partials/project_view.php';
?>


<?php include '../../partials/footer.php'; ?>
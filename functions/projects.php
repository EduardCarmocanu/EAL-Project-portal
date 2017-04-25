<?php

function getProjects ($path) {
	$data = file_get_contents($path);
	return json_decode($data, 1);
}

function saveProjects ($data, $path) {
	$data = json_encode($data, 1);
	print_r($data);
	file_put_contents($path, $data);
}

function setProjects () {

	$projects = getProjects('../projects_data.json');

	$projects[] = [
		'proj_title' => $_POST['proj_title'],
		'proj_tags' => $_POST['proj_tags'],
		'proj_description' => $_POST['proj_description'],
		'proj_executive' => $_POST['proj_executive'],
		'proj_owner' => $_POST['proj_owner'],
		'proj_upload_date' => date('d/m/Y'),
		'proj_cover' => $_FILES['proj_cover']['name']
	];

	saveProjects($projects, '../projects_data.json');
}

function deleteProject($index) {
	$data = getProjects('../projects_data.json');
	unset($data[$index]);
	print_r($data[$index]);

	saveProjects($data, '../projects_data.json');
}
?>
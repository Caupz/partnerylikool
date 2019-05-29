<?php
$files = [
	__DIR__ . '/../components/Router.php',
	__DIR__ . '/../components/QueryBuilder.php',
	__DIR__ . '/../models/BaseModel.php',
	__DIR__ . '/../models/University.php',
	__DIR__ . '/../models/Test.php',
	__DIR__ . '/../controllers/BaseController.php',
	__DIR__ . '/../controllers/SiteController.php'
];

foreach($files as $file) {
	require($file);
}

?>
<?php

use app\components\GridView;
use app\components\Helper;

Helper::setTitle("University");
?>

<h1><?= Helper::getTitle() ?></h1>

<a class="btn btn-primary" href="/admin/create-university">Create</a>

<?= GridView::widget([
	"models" => $models,
	"columns" => [
		"name",
		"country"
	]
]); ?>
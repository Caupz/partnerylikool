<?php 

use app\components\ActiveForm;

?>

<a class="btn btn-primary" href="/course-teacher/index">Back</a>

<?php $form = ActiveForm::begin();?>

<?= $form->field($model, 'course_id')->dropDownList($optionsCourse) ?>
<?= $form->field($model, 'teacher_id')->dropDownList($optionsTeacher) ?>

<div class="form-group">
<?= ActiveForm::submitButton("Save", ['class' => 'btn btn-success']) ?>
</div>

<?php ActiveForm::end(); ?>

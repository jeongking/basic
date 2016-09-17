<?php
use yii\Widgets\ActiveForm;
$form = ActiveForm::begin([
	'id' => 'login-form',
	'options' => ['class' => 'form-horizontal'],
])
?>
<?=$form->field($model, 'username')?>
<?=$form->field($model, 'password')->passwordInput()?>
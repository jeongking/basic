<?php
use yii\Widgets\ActiveForm;
?>
<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']])?>
<button>Submit</button>
<?php ActiveForm::end()?>
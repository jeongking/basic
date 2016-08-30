<?php
namespace app\controllers;

use app\models\EntryForm;
use Yii;
use yii\web\Controller;

class FormController extends Controller {
	public function actionEntry() {
		$model = new EntryForm;
		if ($model->load(Yii::$app->request->post()) && $model->validate()) {
			return $this->render('entry-confirm', ['model' => $model]);
		} else {
			return $this->render('entry', ['model' => $model]);
		}
	}
}
<?php
namespace app\controllers;
use app\models\UploadForm;
use Yii;
use yii\web\Controller;
use yii\web\UploadedFile;

class IndexController extends Controller {
	public function actionUpload() {
		$model = new UploadForm();
		// return $this->render(index);
		if (Yii::$app->request->isPost) {
			$model->imageFile = UploadedFile::getInstance($model, 'imageFile');
			if ($model->upload()) {
				return;
			}
		}
		return $this->render('upload', ['model' => $model]);
	}
}
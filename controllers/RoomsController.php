<?php 
namespace app\controllers;
use Yii;
use yii\web\Controller;
class RoomsController extends Controller{
	public function actionIndex(){
		$sql = 'SELECT * FROM room ORDER BY id ASC';
		$db = Yii::$app->db;
		$rooms = $db->createCommand($sql)->queryAll();
		return $this->render('index',['rooms' => $rooms]);
	}
}
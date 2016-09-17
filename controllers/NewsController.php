<?php 
namespace app\controllers;
use Yii;
use yii\web\Controller;
class NewsController extends Controller{
	public function dataItems(){
		// $newsList = [
  //       ['title' => 'First World War', 'date' => '1914-07-28'],
  //       ['title' => 'Second World War', 'date' => '1939-09-01'],
  //       ['title' => 'First man on the moon', 'date' => '1969-07-20']
		// ];
		$newsList = [
		['id' => 1, 'title' => 'First World War', 'date' => '1914-07-28'],
		['id' => 2, 'title' => 'Second World War', 'date' => '1939-09-01'],
		['id' => 3, 'title' => 'First Man On The moon', 'date' => '1969-07-20']
		];
		return $newsList;
	}
	public function actionItemsList(){
		$newsList = $this->dataItems();
		return $this->render('itemsList',['newsList' => $newsList]);
	}
	public function actionItemsDetail($id){
		$newsList = $this->dataItems();
		$item = null;
		foreach ($newsList as $n) {
			if ($id == $n['id']) $item = $n;
		}
		return $this->render('itemsDetail',['item' => $item]);
	}
}
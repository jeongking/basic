<?php
namespace app\components;
use yii\web\UrlRuleInterface;
use yii\base\Object;
class NewsUrlRule extends Object implements UrlRuleInterface{
	public function createUrl($manager,$route,$params){
		if ($route === 'news/item-detail') {
			if (isset($params['title'])) {
				return 'news/'.$params['title'];
			}
		}
		return false;
	}
	public function parseRequest($manager,$request){
		$pathInfo = $request->getPathInfo()
	}
}
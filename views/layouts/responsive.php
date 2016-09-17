<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\assets\AppAsset;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;

AppAsset::register($this);
?>
<?php $this->beginPage()?>
<!DOCTYPE html>
<html lang="<?=Yii::$app->language?>">
<head>
    <meta charset="<?=Yii::$app->charset?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?=Html::csrfMetaTags()?>
    <title><?=Html::encode($this->title)?></title>
    <?php $this->head()?>
</head>
<?php $backgroundColor = isset($this->params['background-color'])?$this->params['background-color']:'#FFFFFF'; ?>
<body style="background-color:<?php echo $backgroundColor ?>">
<?php $this->beginBody()?>

<div class="wrap" >
    <?php
NavBar::begin([
	'brandLabel' => '商城',
	'brandUrl' => Yii::$app->homeUrl,
	'options' => [
		'class' => 'navbar-inverse navbar-fixed-top',
	],
]);
echo Nav::widget([
	'options' => ['class' => 'navbar-nav navbar-right'],
	'items' => [
		['label' => '首页', 'url' => ['/site/index']],
		['label' => '关于', 'url' => ['/site/about']],
		['label' => '联系', 'url' => ['/site/contact']],
		Yii::$app->user->isGuest ? (
			['label' => '登陆', 'url' => ['/site/login']]
		) : (
			'<li>'
			. Html::beginForm(['/site/logout'], 'post', ['class' => 'navbar-form'])
			. Html::submitButton(
				'Logout (' . Yii::$app->user->identity->username . ')',
				['class' => 'btn btn-link']
			)
			. Html::endForm()
			. '</li>'
		),
	],
]);
NavBar::end();
?>

    <div class="container-fluid" style="padding-top:100px">
        <?=Breadcrumbs::widget([
	'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
])?>
    <div class="well">
    	This is content for blockADV from view
    	<br>
    	<?php if(isset($this->blocks['blockADV'])) { ?>
    		<?php echo $this->blocks['blockADV']; ?>
    		<?php } else { ?>
    			<i>No content available</i>
    		<?php } ?>
    </div>
        <?=$content?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; 商城<?=date('Y')?></p>

        <p class="pull-right"><?=Yii::powered()?></p>
    </div>
</footer>

<?php $this->endBody()?>
</body>
</html>
<?php $this->endPage()?>

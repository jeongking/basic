<?php?>
<table>
	<tr>
		<th>Title</th>
		<th>Date</th>
	</tr>
	<?php foreach($newsList as $item) { ?>
	<tr>
		<th><?php echo $item['title'] ?></th>
		<th><?php echo $item['date'] ?></th>
		<th><a href="<?php echo Yii::$app->urlManager->createUrl(['news/items-detail','id'=>$item['id']]) ?>"><?php echo $item['title']?></a></th>
		<th><?php echo Yii::$app->formatter->asDatetime($item['date'],"php:d/m/Y"); ?></th>
	</tr>
	<?php } ?>
</table>
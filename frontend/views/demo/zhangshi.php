<?php 
	use yii\helpers\Url;
	   use yii\widgets\LinkPager;
 ?>
 
<table border="1">
	<tr>
		<td>留言人</td>
		<td>标题</td>
		<td>日记</td>
		<td>操作</td>
	</tr>
	<?php foreach ($model as $key => $value): ?>
		
	
	<tr>
		<td><?php echo $value['username'] ?></td>
		<td><?php echo $value['title'] ?></td>
		<td><?php echo $value['nei'] ?></td>
		<td>
			<a href="<?php echo Url::to(['demo/delete','id'=>$value['id']]); ?>">删除</a>
			<a href="<?php echo Url::to(['demo/update','id'=>$value['id']]); ?>">修改</a>
		</td>
	</tr>
	<?php endforeach ?>


	<?=
LinkPager::widget([
      'pagination' => $pages,
    ]);
?>
</table>
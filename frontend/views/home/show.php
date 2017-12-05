<?php 
	use yii\helpers\Url;
 ?>
 <a href="<?php echo Url::to(['home/index']); ?>">添加</a>
<table border="1">
	<tr>
		<td>用户名</td>
		<td>密码</td>
		<td>操作</td>
	</tr>
	<?php foreach ($data as $key => $value): ?>
		
	
	<tr>
		<td><?php echo $value['username'] ?></td>
		<td><?php echo $value['password'] ?></td>
		<td>
			<a href="<?php echo Url::to(['home/delete','id'=>$value['id']]); ?>">删除</a>
			<a href="<?php echo Url::to(['home/update','id'=>$value['id']]); ?>">修改</a>
		</td>
	</tr>
	<?php endforeach ?>
</table>
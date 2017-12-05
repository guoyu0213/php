<?php 
	use yii\helpers\Url;
 ?>
<form action="<?php echo Url::to(['demo/add']); ?>" method="post">
	用户名：<?php echo $username ?>
	<br/>
	<input type="hidden" name="username" value="<?php echo $username ?>">
		<tr>
			<td>标题：</td>
			<td><input type="text" name="title"></td>
		</tr>
<br/>
		<tr>
			<td>日记：</td>
			<td><textarea name="nei" id="" cols="30" rows="10"></textarea></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit"></td>
		</tr>
</form>
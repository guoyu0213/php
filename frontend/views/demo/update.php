<?php 
	use yii\helpers\Url;
 ?>
<form action="<?php echo Url::to(['demo/updates']); ?>" method="post">
	用户名：<?php echo $data['username'] ?>
	<br/>
	<input type="hidden" name="username" value="<?php echo $data['username'] ?>">
		<tr>
			<td>标题：</td>
			<td><input type="text" name="title" value="<?php echo $data['title'] ?>"></td>
		</tr>
<br/>
		<tr>
			<td>日记：</td>
			<td><textarea name="nei" id="" cols="30" rows="10" value="" ><?php echo $data['nei'] ?></textarea></td>
		</tr>
		<tr>
			<td><input type="text" name="id" value="<?php echo $data['id'] ?>"></td>
			<td><input type="submit"></td>
		</tr>
</form>
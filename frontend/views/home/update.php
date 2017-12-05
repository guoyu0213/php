<?php 
	use yii\helpers\Url;
 ?>
<form action="<?php echo Url::to(['home/updates']); ?>" method="post">
		<tr>
			<td>用户名：</td>
			<td><input type="text" name="username" value="<?php echo $data['username'] ?>"></td>
		</tr>

		<tr>
			<td>密码：</td>
			<td><input type="text" name="password" value="<?php echo $data['password'] ?>"></td>
		</tr>
		<tr>
			<td><input type="text" name="id" value="<?php echo $data['id'] ?>"></td>
			<td><input type="submit" value="修改"></td>
		</tr>
</form>
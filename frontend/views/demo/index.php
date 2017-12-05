<?php 
	use yii\helpers\Url;
 ?>
<form action="<?php echo Url::to(['demo/login']); ?>" method="post">
		<tr>
			<td>用户名：</td>
			<td><input type="text" name="username"></td>
		</tr>

		<tr>
			<td>密码：</td>
			<td><input type="text" name="password"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" value="登录"></td>
		</tr>
</form>
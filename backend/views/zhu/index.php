<?php 
	use yii\helpers\Url;
 ?>
<table border="1">
	<tr>
		<td>ID</td>
		<td>字段名</td>
		<td>字段类型</td>
		<td>字段默认值</td>
		<td>是否必填</td>
		<td>验证规则</td>
		<td>字段限制</td>
		<td>操作</td>
	</tr>
	<?php foreach ($data as $key => $value): ?>
	<tr>
		<td><?php echo $value['id'] ?></td>
		<td><?php echo $value['ziduan'] ?></td>
		<td><?php echo $value['type'] ?></td>
		<td><?php echo $value['moren'] ?></td>
		<td><?php echo $value['isset'] ?></td>
		<td><?php echo $value['guize'] ?></td>
		<td><?php echo $value['xianzhi'] ?></td>
		<td>
			<a href="<?php echo Url::to(['zhu/update','id'=>$value['id']]); ?>">编辑</a>|

			<a href="<?php echo Url::to(['zhu/delete','id'=>$value['id']]); ?>">删除</a>
		</td>
	</tr>
	<?php endforeach ?>
</table>

<meta charset="utf8">
<?php 
    use yii\helpers\Url;
 ?>s
<style>
table{ border-collapse: collapse; border: 1px solid #ddd; width: 800px; margin: 0 auto;margin-top: 50px; background: rgba(121, 217, 221, 0.4); color: #666}
table tr{ height: 40px;}
table td{ border: 1px solid #ddd; text-align: center}

*{margin: 0; padding:0 ; font-family: 微软雅黑}
a{ text-decoration: none; color: #666;}

.top{ width: 100%; text-align: center;}
.top h2{ margin-top: 50px;}

form{ width: 450px; margin: 0 auto; margin-top: 50px;}
form input{
    width: 300px;
    height: 40px;
    border: 1px solid #ddd;
    border-radius: 5px;
    padding-left: 5px;
    font-size: 14px;
}

form p{
    margin-top: 20px;
    width: 100%;
}

form span{
    width: 100px;
    text-align: right;
    display: inline-block;
}

.check_label{
    width: 600px;
    margin: 0 auto;
    margin-top: 50px;
}

.check_label p{
    width: 550px;
    margin: 0 auto;
    margin-top: 30px;
}

.check_label .intrest_label a{
    padding: 5px;
    border: 1px solid rgba(0, 150, 0, 0.55);
    border-radius: 3px;
    white-space:nowrap;
    display: inline-block;
    margin-top: 10px;
    margin-left: 10px;
    color: #666;
}

.check_label .a_selected{
    background: rgba(0, 150, 0, 0.55);
    color: #fff;
}

.check_label .a_button{
    width: 150px;
    height: 40px;
    line-height: 40px;
    text-align: center;
    background: green;
    color: #fff;
    display: inline-block;
    border: 1px solid green;
    border-radius: 5px;
    margin: 0 auto;
}

.handler-button{
    text-align: center;
}
</style>

<div class="top">
    <h2>欢迎注册</h2>
</div>

<div class="main">
    <div class="check_label">
        <h4>请选择您的兴趣标签</h4>
        <form action="<?php echo Url::to(['zhou/wan']) ?>" method='post'>
        <p class="intrest_label">
        	<?php if ($data['xingqu']=='乒乓球'): ?>
        		<a class="a_selected" href="javascript:;">乒乓球</a>
        	<?php else: ?>
            	<a  href="javascript:;">乒乓球</a>
        	<?php endif ?>
        	<?php if ($data['xingqu']=='电影'): ?>
        		<a class="a_selected" href="javascript:;">电影</a>
        	<?php else: ?>
            	<a  href="javascript:;">电影</a>
        	<?php endif ?>
        	<?php if ($data['xingqu']=='爬树'): ?>
        		<a class="a_selected" href="javascript:;">爬树</a>
        	<?php else: ?>
            	<a  href="javascript:;">爬树</a>
        	<?php endif ?>
        	<?php if ($data['xingqu']=='打篮球'): ?>
        		<a class="a_selected" href="javascript:;">打篮球</a>
        	<?php else: ?>
            	<a  href="javascript:;">打篮球</a>
        	<?php endif ?>
        	<?php if ($data['xingqu']=='旅游'): ?>
        		<a class="a_selected" href="javascript:;">旅游</a>
        	<?php else: ?>
            	<a  href="javascript:;">旅游</a>
        	<?php endif ?>
        	<?php if ($data['xingqu']=='打篮球'): ?>
        		<a class="a_selected" href="javascript:;">打篮球</a>
        	<?php else: ?>
            	<a  href="javascript:;">打篮球</a>
        	<?php endif ?>
        	<?php if ($data['xingqu']=='足球'): ?>
        		<a class="a_selected" href="javascript:;">足球</a>
        	<?php else: ?>
            	<a  href="javascript:;">足球</a>
        	<?php endif ?>
        </p>

        <p class="handler-button">
            <a class="a_button" href="<?php echo Url::to(['zhou/zhang']) ?>">上一步</a>
           <input type="submit" value="完成" class="a_button">
        </p>
        </form>
    </div>
</div>
s
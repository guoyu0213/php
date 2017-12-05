<?php 
    use yii\helpers\Url;
 ?>
<div class="right">
    <div class="search-box">
        <form action="<?php echo Url::to(['zhu/add']); ?>" method="post">
            <ul>
                <li>
                    <span>请输入字段名称：</span>
                    <input class="" name="ziduan" type="text">
                </li>
                <li>
                    <span>请输入字段默认值：</span>
                    <input class="" name="moren" type="text">
                </li>
                <li>
                    <span>请选择字段类型：</span>
                    <select name="type" id="">
                        <option value="文本框">文本框</option>
                        <option value="单选框">单选框</option>
                        <option value="密码框">密码框</option>
                        <option value="文本域">文本域</option>
                    </select>
                </li>
                <li>
                    <span>请填写字段选项：</span>
                    <input type="text" class="filed-name" placeholder="选项1">
                    <input type="text" class="filed-name" placeholder="选项2">
                </li>
                <li>
                    <span>是否必填：</span>
                    <input type="checkbox" name="isset" value="是">必填
                </li>
                <li>
                    <span>请选择验证规则：</span>
                    <select name="guize" id="">
                        <option value="无">无</option>
                        <option value="phone">手机号码</option>
                        <option value="长度">长度</option>
                    </select>
                </li>
                <li>
                    <span>请选择填写长度范围：</span>
                    <input class="length" name="xianzhi1" type="text" value="" placeholder="请输入最小长度">
                    ~
                    <input class="length" name="xianzhi2" type="text" value="" placeholder="请输入最大长度">
                </li>
                <li>

                    <input type="submit" class="submit" value="提交">
                </li>
            </ul>
        </form>
    </div>
</div>
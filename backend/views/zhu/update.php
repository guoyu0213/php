<?php 
    use yii\helpers\Url;
 ?>
<div class="right">
    <div class="search-box">
        <form action="<?php echo Url::to(['zhu/updates']); ?>" method="post">
            <ul>
                <li>
                    <span>请输入字段名称：</span>
                    <input class="" name="ziduan" type="text" value="<?php echo $data['ziduan'] ?>">
                </li>
                <li>
                    <span>请输入字段默认值：</span>
                    <input class="" name="moren" type="text" value="<?php echo $data['moren'] ?>">
                </li>
                <li>
                    <span>请选择字段类型：</span>

                    <select name="type" id="">
                        <?php if ($data['type']=="文本框"): ?>
                            <option value="文本框" selected>文本框</option>
                            <option value="单选框">单选框</option>
                            <option value="密码框">密码框</option>
                            <option value="文本域">文本域</option>
                        <?php endif ?>
                         <?php if ($data['type']=="单选框"): ?>
                            <option value="文本框" >文本框</option>
                            <option value="单选框" selected>单选框</option>
                            <option value="密码框">密码框</option>
                            <option value="文本域">文本域</option>
                        <?php endif ?>
                         <?php if ($data['type']=="密码框"): ?>
                            <option value="文本框" >文本框</option>
                            <option value="单选框" >单选框</option>
                            <option value="密码框" selected>密码框</option>
                            <option value="文本域">文本域</option>
                        <?php endif ?>
                         <?php if ($data['type']=="文本域"): ?>
                            <option value="文本框" >文本框</option>
                            <option value="单选框" >单选框</option>
                            <option value="密码框">密码框</option>
                            <option value="文本域" selected>文本域</option>
                        <?php endif ?>
                    </select>
                </li>
                <li>
                    <span>请填写字段选项：</span>
                    <input type="text" class="filed-name" placeholder="选项1">
                    <input type="text" class="filed-name" placeholder="选项2">
                </li>
                <li>
                    <span>是否必填：</span>
                    <?php if ($data['isset']=='是'): ?>
                        <input type="checkbox" name="isset" value="是" checked>必填
                    <?php endif ?>
                     <?php if($data['isset']!='是'): ?>
                        <input type="checkbox" name="isset" value="是">必填
                    <?php endif ?>
                    
                </li>
                <li>
                    <span>请选择验证规则：</span>
                    <select name="guize" id="">
                        <?php if ($data['guize']=='无'): ?>
                            <option value="无" selected>无</option>
                            <option value="phone">手机号码</option>
                            <option value="长度">长度</option>
                        <?php endif ?>
                        <?php if ($data['guize']=='手机号码'): ?>
                            <option value="无" >无</option>
                            <option value="phone" selected>手机号码</option>
                            <option value="长度">长度</option>
                        <?php endif ?>
                        <?php if ($data['guize']=='长度'): ?>
                            <option value="无" >无</option>
                            <option value="phone">手机号码</option>
                            <option value="长度" selected>长度</option>
                        <?php endif ?>
                    </select>
                </li>
                <li>
                    <span>请选择填写长度范围：</span>
                    

                    <?php if ($data['xianzhi1']!=''&&$data['xianzhi1']!=''&&$data['xianzhi']!='无'): ?>
                             <input class="length" name="xianzhi1" type="text" value="<?php echo $data['xianzhi1'] ?>" placeholder="请输入最小长度">
                            ~
                        <input class="length" name="xianzhi2" type="text" value="<?php echo $data['xianzhi2'] ?>" placeholder="请输入最大长度">
                    <?php endif ?>
                  <?php if ($data['xianzhi1']!=''&&$data['xianzhi1']!=''&&$data['xianzhi']=='无'): ?>
                             <input class="length" name="xianzhi1" type="text" value="" placeholder="请输入最小长度">
                            ~
                        <input class="length" name="xianzhi2" type="text" value="" placeholder="请输入最大长度">
                    <?php endif ?>
                </li>
                <li>
                    <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
                    <input type="submit" class="submit" value="修改">
                </li>
            </ul>
        </form>
    </div>
</div>
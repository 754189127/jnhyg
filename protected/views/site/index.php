<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
?>


<div class="form">
	<div class="">
    		<div>
            <form action="<?php echo $this->createUrl('site/login')?>"  method="post">
            	<table>
                	<tr>
                    	<td><label>用户名：</label><input name="username" id="username"  type="text"/></td>
                    </tr>
                	<tr>
                    	<td><label>密  码：</label><input name="password" id="password" type="password"/></td>
                    </tr>
                    <tr>
                    	<td><input  type="submit" value="登录" id="btlogin"></td>
                    </tr>
                </table>
            </form>
            </div>
    </div>
</div>
<script>
	
</script>
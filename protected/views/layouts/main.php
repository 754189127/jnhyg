<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
    
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/flexigrid.pack.css" />
    
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/js/artDialog/skins/default.css" />
     <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.min.js"></script>
     <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/flexigrid.pack.js"></script>
     <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.tablesorter.js"></script>
     <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/artDialog/artDialog.source.js"></script>
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<script>

	function ajaxGetperiodical(selId){
		$.ajax({
			url:'<?php echo $this->createUrl('ajax/periodical')?>',	
			type:'post',
			data:{'selId':selId},
			success:function(result){
				$("#periodicalId").html(result);
			}
		});
	}
</script>
<body>

<div class="container" id="page">

	<div id="header">
		<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
	</div><!-- header -->

	<div id="mainmenu">
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'厂商管理', 'url'=>array('company/index')),
				array('label'=>'库存管理', 'url'=>array('product/index')),
				array('label'=>'业务管理', 'url'=>array('business/index')),
				array('label'=>'会员管理', 'url'=>array('member/index')),
				array('label'=>'汇款订购', 'url'=>array('remorder/index')),	
				array('label'=>'电话订购', 'url'=>array('telorder/index')),		
				array('label'=>'出货单', 'url'=>array('deliverorder/index')),			
				array('label'=>'包裹管理', 'url'=>array('package/index')),		
				array('label'=>'查询', 'url'=>array('search/index')),		
				array('label'=>'期数设置', 'url'=>array('periodical/index')),		
				array('label'=>'操作日志', 'url'=>array('log/index')),				

			),
		)); ?>
	</div><!-- mainmenu -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>

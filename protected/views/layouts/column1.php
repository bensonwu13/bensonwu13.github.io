<?php $this->beginContent('//layouts/main'); ?>
<div class="span-4 last">
	<?php if(!Yii::app()->user->isGuest):?>
		<div id="sidebar">
			<?php $this->widget('bootstrap.widgets.TbMenu', array(
			    'type'=>'list',
			    'items'=>array(
			        array('label'=>Yii::t('Customer','Welcome back ').Yii::app()->user->name.'!'),
			        array('label'=>Yii::t('Customer','My Account')),
			        array('label'=>Yii::t('Customer','Home'), 'icon'=>'home', 'url'=>array('/customer/home')),
			        array('label'=>Yii::t('Customer','Profile'), 'icon'=>'user', 'url'=>array('/customer/profile')),
			        array('label'=>Yii::t('Customer','Edit Profile'), 'icon'=>'wrench', 'url'=>array('/customer/modify')),
			        array('label'=>Yii::t('Customer','Password'), 'icon'=>'wrench', 'url'=>array('/customer/password')),
			        array('label'=>Yii::t('Customer','Settings'), 'icon'=>'asterisk', 'url'=>array('/customer/setting')),
			        array('label'=>Yii::t('Customer','Miscellaneous')),
			        array('label'=>Yii::t('Customer','Feedback'), 'icon'=>'thumbs-up', 'url'=>array('/customer/feedback')),
			        array('label'=>Yii::t('Customer','Help'), 'icon'=>'book', 'url'=>array('/task/techdoc', 'topic'=>'doclist')),//array('/site/help')),
			        array('label'=>Yii::t('Customer','Logout')),
			        array('label'=>Yii::t('Customer','Logout'), 'icon'=>'circle-arrow-right', 'url'=>array('/customer/logout')),
			    	array('label'=>Yii::t('Customer','Language')),
			    	array('label'=>'简体中文', 'icon'=>'icon-globe','url'=>array( '' , 'hl' => 'zh_cn' )),
			    	array('label'=>'繁體中文', 'icon'=>'icon-globe','url'=>array( '' , 'hl' => 'zh_tw' )),
			    	array('label'=>'English', 'icon'=>'icon-globe','url'=>array( '' , 'hl' => 'en' )),
			    ),
			)); ?>
		</div><!-- sidebar -->
	<?php endif?>
</div>
<div class="span-20">
	<div id="content">
		<?php echo $content; ?>
	</div><!-- content -->
</div>
<?php $this->endContent(); ?>
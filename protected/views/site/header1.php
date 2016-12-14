<header>
	<section class="head-content">
		<!-- Return to homepage when logo is clicked.
			 This covers the background image with the same picture with link.-->
		<h1 class="logo">
			<a href="index.php"><img src="images/logo.png" /></a>
		</h1>
		<h2 class="logo-txt">Benson Wu's website.</h2>
		<h2 class = "logo-txts">Getting cool!</h2>
				
	</section>
	<nav>
		<ul>
			<li><?php echo CHtml::link(Yii::t('Base','Home'), array('site/index'))?></li>
			<li><?php echo CHtml::link(Yii::t('Base','Contact'), array('site/contact'))?></li>

		</ul>
	</nav>
</header>
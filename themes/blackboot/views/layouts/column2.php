<?php $this->beginContent('//layouts/main'); ?>
      <div class="row-fluid">
        <!--<div class="span3">
        	<div id="sidebar">
    			<?php 
    				//Aquí se puede mostrar un menú u otro dependiendo si es un usuario registrado o no
    				if( !Yii::app()->user->isGuest ){
    					$this->widget('UserMenu'); 
    				  }else{ 
    				  	$this->widget('UserMenu');
    				  }
    			?>
			</div>        
		</div>sidebar span3 -->

	<div class="span12">
		<div class="main">
			<?php echo $content; ?>
		</div><!-- content -->
	</div>
</div>
<?php $this->endContent(); ?>

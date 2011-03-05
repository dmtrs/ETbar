<div class="etbar_content_item">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('em_code')); ?>:</b>
	<?php echo CHtml::encode($data->em_code); ?>
	<br />


</div>

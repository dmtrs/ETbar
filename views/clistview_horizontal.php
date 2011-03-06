<div class="etbar_clistview_horizontal_item" style="height:<?php echo $x;?>%;" >

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('em_code')); ?>:</b>
	<?php echo CHtml::encode($data->em_code); ?>
	<br />


</div>

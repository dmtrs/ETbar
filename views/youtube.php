<?php
echo CHtml::openTag('div', array(
    'class'=>'etbar_clistview_vertical_item',
    'style'=>"width: $x%;",
    ));
?><iframe id="<?php echo uniqid();?>"title="YouTube video player" width="200" height="200" src="http://www.youtube.com/<?php echo $data->em_code;?>" frameborder="0" allowfullscreen></iframe>
<!--

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('em_code')); ?>:</b>
	<?php echo CHtml::encode($data->em_code); ?>
	<br />
-->
<?php
echo CHtml::closeTag('div');
?>


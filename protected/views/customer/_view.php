<?php
/* @var $this CustomerController */
/* @var $data Customer */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_customer')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_customer), array('view', 'id'=>$data->id_customer)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('erp_customer')); ?>:</b>
	<?php echo CHtml::encode($data->erp_customer); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('company')); ?>:</b>
	<?php echo CHtml::encode($data->company); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('address')); ?>:</b>
	<?php echo CHtml::encode($data->address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('npwp')); ?>:</b>
	<?php echo CHtml::encode($data->npwp); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('teritory')); ?>:</b>
	<?php echo CHtml::encode($data->teritory); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('create_at')); ?>:</b>
	<?php echo CHtml::encode($data->create_at); ?>
	<br />


</div>
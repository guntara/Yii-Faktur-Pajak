<?php
/* @var $this CustomerController */
/* @var $model Customer */

$this->breadcrumbs=array(
	'Customers'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Customer', 'url'=>array('index')),
	array('label'=>'Create Customer', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('customer-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Customers</h1>
<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'customer-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		/*
		'id_customer',
		'erp_customer',
		'company',
		'address',
		'npwp',
		'teritory',
		'create_at',
		*/
		array(
			'name'=>'erp_customer',
			'header'=>'ERP Customer',
			'type'=>'text',
			'headerHtmlOptions'=>array('width'=>'150px'),
			'htmlOptions'=>array('style'=>'text-align: left;'),

		),
		array(
			'name'=>'company',
			'header'=>'Company Name',
			'type'=>'text',
			'headerHtmlOptions'=>array('width'=>'180px'),
			'htmlOptions'=>array('style'=>'text-align: left;'),

		),
		'address',
		array(
			'name'=>'npwp',
			'type'=>'text',
			'headerHtmlOptions'=>array('width'=>'200px'),
			'htmlOptions'=>array('style'=>'text-align: right;'),

		),
		array(
			'header'=>'Action',
			'headerHtmlOptions'=>array('width'=>'20px'),
			'class'=>'CButtonColumn',
			'template'=>'{view}{update}',
		),
	),
)); ?>

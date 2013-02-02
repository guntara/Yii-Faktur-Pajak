<?php
/* @var $this SalesReportController */
/* @var $model SalesReport */

$this->breadcrumbs=array(
	'Sales Reports'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List SalesReport', 'url'=>array('index')),
	array('label'=>'Create SalesReport', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('sales-report-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Sales Report</h1>

<?php //echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'sales-report-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
                array(
                        'name'=>'no_faktur',
			'type'=>'text',
			'headerHtmlOptions'=>array('width'=>'80px'),
			'htmlOptions'=>array('style'=>'text-align: left;'),
                ),
		array(
			'name'=>'id_SO',
			'type'=>'text',
			'headerHtmlOptions'=>array('width'=>'70px'),
			'htmlOptions'=>array('style'=>'text-align: left;'),

		),
		array(
			'name'=>'id_DO',
			'type'=>'text',
			'headerHtmlOptions'=>array('width'=>'70px'),
			'htmlOptions'=>array('style'=>'text-align: left;'),

		),
		array(
			'name'=>'id_invoice',
			'type'=>'text',
			'headerHtmlOptions'=>array('width'=>'70px'),
			'htmlOptions'=>array('style'=>'text-align: left;'),

		),
		array(
			'name'=>'posting_date',
			'header'=>'Post Date',
			'type'=>'text',
			'headerHtmlOptions'=>array('width'=>'70px'),
			'htmlOptions'=>array('style'=>'text-align: center;'),

		),
		array(
			'name'=>'due_date',
			'type'=>'text',
			'headerHtmlOptions'=>array('width'=>'70px'),
			'htmlOptions'=>array('style'=>'text-align: center;'),

		),
		'customer',
		array(
			'name'=>'total',
			'type'=>'text',
			'headerHtmlOptions'=>array('width'=>'90px'),
			'htmlOptions'=>array('style'=>'text-align: right;'),

		),
		array(
			'header'=>'Action',
			'headerHtmlOptions'=>array('width'=>'30px'),
			'class'=>'CButtonColumn',
			'template'=>'{view}{update}',
		),
	),
)); ?>

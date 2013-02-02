<?php
/* @var $this SalesReportController */
/* @var $model SalesReport */
$this->breadcrumbs=array(
	'Sales Reports'=>array('index'),
	$model->id_SO,
       
);

$this->menu=array(
	array('label'=>'List SalesReport', 'url'=>array('index')),
	//array('label'=>'Create SalesReport', 'url'=>array('create')),
	//array('label'=>'Update SalesReport', 'url'=>array('update', 'id'=>$model->id)),
	//array('label'=>'Delete SalesReport', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	//array('label'=>'Manage SalesReport', 'url'=>array('admin')),
);
?>
<div class="page-header">
        <h1><small>View Invoice. <?php echo $model->id_invoice ;?></small></h1><br />
        <?php
        $this->widget('bootstrap.widgets.TbLabel', array(
            'type'=>'info', // 'success', 'warning', 'important', 'info' or 'inverse'
            'label'=>'Lembar 2',
        ));
        ;?>
</div>

<?php 
$this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'id',
                'no_faktur',
		'id_SO',
		'id_DO',
		'id_invoice',
		'posting_date',
		'due_date',
		'customer',
		'quantity',
		'uom',
		//'teritory',
		'sales_term',
		'total',
		//'status',
		//'create_at',
	),
)); 
;?>
<div class="clear"></div>
<?php 
$this->widget('bootstrap.widgets.TbButtonGroup', array(
    'buttons'=>array(
	    array('label'=>'Lembar 1', 'url'=>Yii::app()->getBaseUrl().'/index.php?r=salesReport/view&id='.$model->id),
	    array('label'=>'Lembar 2', 'url'=>'#'),
	    array('label'=>'Bukti Potong', 'url'=>Yii::app()->getBaseUrl().'/index.php?r=salesReport/buktipotong&id='.$model->id)
    ),
));
;?>
<div class="clear"></div>
<br />
<?php
    $this->widget('application.extensions.print.printWidget', array(                   
                        'cssFile' => 'print.css',
                        //'printedElement'=> '#buktiptg',

                        'printedElement'=>'#print-wrapper2',
                )
    ); 
    $data = $model->id;
    $cust = $this->getDetail($data);
?>
<div id="print-wrapper2">
<div class="tp-rght">
    <?php echo 'Lembar Ke-1 : Untuk Pembeli BKP/Pemberi JKP sebagai bukti Pajak Keluaran' ;?>
</div>
<div class="spacing"></div>
<div class="judul1"><?php echo  'faktur pajak';?></div>
<div class="spacing"></div>
<div id="box">
    <div class="data-row">
        <?php echo 'Kode dan Nomor Seri Faktur Pajak : '.$model->no_faktur ;?>
    </div>
    <div class="data-row">
        <?php echo 'Pengusaha Kena Pajak' ;?>
    </div>
    <div class="data-row">
        <div class="attribute"><?php echo 'Name' ;?></div><?php echo ': PT. Gunung Pantara Barisan';?><br />
        <div class="attribute"><?php echo 'Alamat' ;?></div><?php echo ': Jl. Teuku Umar No. 6 Medan' ;?><br />
        <div class="attribute"><?php echo 'NPWP' ;?></div><?php echo ': 02.637.407.4-124.000' ;?>
    </div>
    <div class="data-row">
        <?php echo 'Pembeli Barang Kena Pajak/Penerima Jasa Kena Pajak' ;?>
    </div>
    <div class="data-row">
         <div class="attribute"><?php echo 'Name' ;?></div><?php echo ': '.$cust->erp_customer;?><br />
        <div class="attribute"><?php echo 'Alamat' ;?></div><?php echo ': '.$cust->address ;?><br />
        <div class="attribute"><?php echo 'NPWP' ;?></div><?php echo ': '.$cust->npwp ;?>
    </div>
    <table class="tab-bordered">
        <thead>
            <tr>
                <th><?php echo 'No. Urut' ;?></th>
                <th><?php echo 'Nama Barang Kena Pajak/Jasa Kena Pajak' ;?></th>
                <th><?php echo 'Harga Jual/Penggantian/Uang Muka/Termin (Rp)' ;?></th>
            </tr> 
        </thead>
        <tbody>
            <tr style="height: 320px; alignment-adjust: text-before-edge;">
                <td><?php echo '1.' ;?></td>
                <td><?php echo 'Semen Pantara PPC '.$model->id_invoice ;?></td>
                <td><?php echo 'Rp. '.$model->total ;?></td>
            </tr>
            <tr>
                <td colspan="2"><?php echo 'Harga Jual/Penggantian/Uang Muka/Termin *)' ;?></td>
                <td><?php echo 'Rp. '.$model->total ;?></td>
            </tr>
            <tr>
                <td colspan="2"><?php echo 'Dikurangi Potongan Harga' ;?></td>
                <td><?php echo '' ;?></td>
            </tr>
            <tr>
                <td colspan="2"><?php echo 'Dikurangi Uang Muka yang sudah diterima' ;?></td>
                <td><?php echo '' ;?></td>
            </tr>
            <tr>
                <td colspan="2"><?php echo 'Dasar Pengenaan Pajak' ;?></td>
                <td><?php echo '' ;?></td>
            </tr>
             <tr>
                <td colspan="2"><?php echo 'PPN = 10% x Dasar Pengenaan Pajak' ;?></td>
                <td><?php echo '' ;?></td>
            </tr>
        </tbody>
        
    </table>
    <div class="spacing"></div>
    <div class="wraptab">
        <br />
        <table class="tab-bordered">
            <thead>
                <tr>
                    <th><?php echo 'Tarif' ;?></th>
                    <th><?php echo 'DPP' ;?></th>
                    <th><?php echo 'PPn BM' ;?></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo '..... %' ;?></td>
                    <td><?php echo 'Rp ..........' ;?></td>
                    <td><?php echo 'Rp ..........' ;?></td>
                </tr>
                <tr>
                    <td><?php echo '..... %' ;?></td>
                    <td><?php echo 'Rp ..........' ;?></td>
                    <td><?php echo 'Rp ..........' ;?></td>
                </tr>
                <tr>
                    <td><?php echo '..... %' ;?></td>
                    <td><?php echo 'Rp ..........' ;?></td>
                    <td><<?php echo 'Rp ..........' ;?>/td>
                </tr>
                <tr>
                    <td colspan="2"><?php echo 'Jumlah' ;?></td>
                    <td><?php echo 'Rp ..........' ;?></td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="bottom-sign">
        <br /><br /><br />
        <p><?php echo 'Medan, 30 November 2012' ;?></p>
        <div class="sign-space"></div>
        <?php echo 'Bagastar Nainggolan, S.E, Akt' ;?>
        <div class="bottom-line"></div>
        <p><?php echo 'Accounting & Finance Manager' ;?></p>
    </div>
    <div class="clear"></div>
</div>
<div class="sign-space"></div>
<?php echo '*) Coret yang tidak perlu' ;?>
</div>
<div class="clear"></div>
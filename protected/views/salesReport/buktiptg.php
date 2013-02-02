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
            'label'=>'Bukti Potong',
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


<?php 
$this->widget('bootstrap.widgets.TbButtonGroup', array(
    'buttons'=>array(
	    array('label'=>'Lembar 1', 'url'=>Yii::app()->getBaseUrl().'/index.php?r=salesReport/view&id='.$model->id),
	    array('label'=>'Lembar 2', 'url'=>Yii::app()->getBaseUrl().'/index.php?r=salesReport/lembarkedua&id='.$model->id),
	    array('label'=>'Bukti Potong', 'url'=>'#' )
    ),
));
?>
<div class="clear"></div>
<br />
<?php 
    $this->widget('application.extensions.print.printWidget', array(                   
                        'cssFile' => 'print.css',
                        //'printedElement'=> '#buktiptg',

                        'printedElement'=>'.buktiptg',
                        )
    );  
//register all variable
    $data = $model->id;
    $cust = $this->getDetail($data);      
?>
<div class="buktiptg">
<div class="logo">
    <img src="<?php echo Yii::app()->getBaseUrl();?>/images/dirjen-pajak.jpg" />
</div>
<div class="dirjen">
    <?php echo 'Departemen Keuangan Republik Indonesia';?><br />
    <?php echo 'Direktorat Jenderal Pajak';?><br />
    <?php echo 'Kantor Pelayanan Pajak';?><br />
    <?php echo 'MEDAN';?>
</div>
<div class="top-right">
    <?php echo 'Lembar ke-1 untuk : Wajib Pajak' ;?><br />
    <?php echo 'Lembar ke-2 untuk : Kantor Pelayanan Pajak' ;?><br />
    <?php echo 'Lembar ke-3 untuk : Pemungut Pajak' ;?>
</div>
<div class="break"></div>
<div class="title">
    <?php echo 'Bukti Pemungutan PPh Pasal 22' ;?><br />
    <?php echo 'Oleh Badan Industri/Eksportir Tertentu' ;?><br />
    <div class="title-line"></div>
    <div class="nomor"><?php echo 'Nomor : 059 /PPH 22/XI/2012';?></div>
</div>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'transactions-form',
	'enableAjaxValidation'=>false,
)); 
    //this variable to get pajak nominal
    $total = $model->total;
    $pajak = $this->getNominal($total);
?>
    <div class="row">
        <label><?php echo 'NPWP' ;?></label><?php echo ': '.$cust->npwp; ?>
    </div>
    <div class="break"></div>
    <div class="row">
        <label><?php echo 'Nama Wajib Pajak' ;?></label><?php echo ': '.$cust->erp_customer; ?>
    </div>
    <div class="break"></div>
    <div class="row">
        <label><?php echo 'Alamat';?></label><?php echo ': '.$cust->address; ?>
    </div>
    <div class="break"></div>
<?php $this->endWidget(); ?>    
</div>

<table class="bordered">
    <thead>
        <tr>
            <th><?php echo 'No' ;?></th>
            <th><?php echo 'Uraian' ;?></th>
            <th><?php echo 'Harga' ;?></th>
            <th><?php echo 'Tarif' ;?></th>
            <th><?php echo 'Pajak yang dipungut' ;?></th>
        </tr>
        <tr>
            <th><?php echo '(1)';?></th>
            <th><?php echo '(2)';?></th>
            <th><?php echo '(3)';?></th>
            <th><?php echo '(4)';?></th>
            <th><?php echo '(5)';?></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td></td>
            <td><?php echo 'Jenis Industri :' ;?></td>
            <td><?php echo 'Penjualan Bruto :' ;?></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td><?php echo '1.' ;?></td>
            <td><?php echo 'Semen' ;?></td>
            <td><div class="line"><?php echo 'Rp. '.$model->total ;?></div>
            <td><div class="line"><?php echo '0.25 %' ;?></div>
            <td><div class="line"><?php echo 'Rp. '.$pajak ;?></div>
        </tr>
        <tr>
            <td><?php echo '2.' ;?></td>
            <td><?php echo 'Kertas' ;?></td>
            <td><div class="line"><?php echo 'Rp.' ;?></div></td>
            <td><div class="line"><?php echo '' ;?></div></td>
            <td><div class="line"><?php echo 'Rp.' ;?></div></td>
        </tr>
        <tr>
            <td><?php echo '3.' ;?></td>
            <td><?php echo 'Baja' ;?></td>
            <td><div class="line"><?php echo 'Rp.' ;?></div></td>
            <td><div class="line"><?php echo '' ;?></div></td>
            <td><div class="line"><?php echo 'Rp.' ;?></div></td>
        </tr>
        <tr>
            <td><?php echo '4.' ;?></td>
            <td><?php echo 'Otomotif' ;?></td>
            <td><div class="line"><?php echo 'Rp.' ;?></div></td>
            <td><div class="line"><?php echo '' ;?></div></td>
            <td><div class="line"><?php echo 'Rp.' ;?></div></td>
        </tr>
         <tr>
            <td><?php echo '5.' ;?></td>
            <td><?php echo '............' ;?></td>
            <td><div class="line"><?php echo 'Rp.' ;?></div></td>
            <td><div class="line"><?php echo '' ;?></div></td>
            <td><div class="line"><?php echo 'Rp.' ;?></div></td>
        </tr>
         <tr>
            <td></td>
            <td><?php echo 'INDUSTRI / EKSPORTIR :' ;?></td>
            <td><?php echo 'Pembelian Bruto :' ;?></td>
            <td></td>
            <td></td>
        </tr>
         <tr>
            <td><?php echo '6.' ;?></td>
            <td><?php echo 'Sektor' ;?></td>
            <td><div class="line"><?php echo 'Rp.' ;?></div></td>
            <td><div class="line"><?php echo '' ;?></div></td>
            <td><div class="line"><?php echo 'Rp.' ;?></div></td>
        </tr>
         <tr>
            <td><?php echo '7.' ;?></td>
            <td><?php echo 'Sektor' ;?></td>
            <td><div class="line"><?php echo 'Rp.' ;?></div></td>
            <td><div class="line"><?php echo '' ;?></div></td>
            <td><div class="line"><?php echo 'Rp.' ;?></div></td>
        </tr>
        <tr>
            <td style="border-top: 1px #444 solid" colspan="2"><?php echo 'J U M L A H' ;?></td>
            <td style="background: #ddd; float: right;" colspan="2"><div class="line"><? echo 'Rp. '.$model->total;?></div></td>
            <td><div class="line"><?php echo 'Rp. '.$pajak ;?></div></td>
            
        </tr>
        <tr>
            <?php 
                /*
                 * terbilang component, get number spell in indonesian
                 */
                 Yii::import("application.components.Terbilang");
                    $terbilang = new Terbilang();
            ;?>
            <td colspan="5"><label><?php echo 'Terbilang :' ;?></label><div class="line-two"><?php echo $terbilang->rupiah($pajak) ;?></div></td>
        </tr>
    </tbody>
</table>
<br /><br />
<div class="left-bottom">
<?php echo 'Perhatian :' ;?>
    <ol>
        <li><?php echo 'Jumlah PPh Pasal 22 yang dipungut di atas merupakan pembayaran dimuka atas PPh yang terutang untuk tahun pajak yang bersangkutan. Simpanlah Bukti Pemungutan ini baik-baik untuk diperhitungkan sebagai kredit pajak dalam Surat Pemberitahuan (SPT) Tahunan PPh.' ;?></li>
        <li><?php echo 'Bukti Pemungutan ini dianggap sah apabila diisi dengan lengkap dan benar' ;?></li>
    </ol>          
</div>
<div class="keterangan">
    <p><?php echo 'Medan' ;?></p>
    <p class="gobold"><?php echo 'Pemungut Pajak,' ;?></p>
    <p><label class="gobold-left"><?php echo 'NPWP' ;?></label><?php echo '02-637-407-4-124-000' ;?></p>
    <p><label class="gobold-left"><?php echo 'Nama' ;?></label><?php echo 'PT. GUNUNG PANTARA BARISAN' ;?></p>
    <div class="spacing"></div>
    <p class="gobold"><?php echo 'Tanda tangan, nama dan cap' ;?></p>
    <div class="spacing"></div>
    <p><?php echo 'Bagastar Nainggolan S.E, Akt' ;?></p>
</div>
<div class="clear"></div>
</div>
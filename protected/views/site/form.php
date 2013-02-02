<div class="logo"></div>
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
)); ?>
    <div class="row">
        <label><?php echo 'NPWP' ;?></label><?php echo ': ' ;?>
    </div>
    <div class="break"></div>
    <div class="row">
        <label><?php echo 'Nama Wajib Pajak' ;?></label><?php echo ': ' ;?>
    </div>
    <div class="break"></div>
    <div class="row">
        <label><?php echo 'Alamat';?></label><?php echo ': ' ;?>
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
            <td><input type="text" class="line" name="total" value="Rp 31.951.202"/></td>
            <td><input type="text" class="line" name="persen" value="25%"/></td>
            <td><input type="text" class="line" name="bayar" value="Rp 79.878"/></td>
        </tr>
        <tr>
            <td><?php echo '2.' ;?></td>
            <td><?php echo 'Kertas' ;?></td>
            <td><input type="text" class="line" name="total" value="Rp"/></td>
            <td><input type="text" class="line" name="persen" value=" "/></td>
            <td><input type="text" class="line" name="bayar" value=""/></td>
        </tr>
        <tr>
            <td><?php echo '3.' ;?></td>
            <td><?php echo 'Baja' ;?></td>
            <td><input type="text" class="line" name="total" value="Rp"/></td>
            <td><input type="text" class="line" name="persen" value=" "/></td>
            <td><input type="text" class="line" name="bayar" value=""/></td>
        </tr>
        <tr>
            <td><?php echo '4.' ;?></td>
            <td><?php echo 'Otomotif' ;?></td>
            <td><input type="text" class="line" name="total" value="Rp"/></td>
            <td><input type="text" class="line" name="persen" value=" "/></td>
            <td><input type="text" class="line" name="bayar" value=""/></td>
        </tr>
         <tr>
            <td><?php echo '5.' ;?></td>
            <td><?php echo '............' ;?></td>
            <td><input type="text" class="line" name="total" value="Rp"/></td>
            <td><input type="text" class="line" name="persen" value=" "/></td>
            <td><input type="text" class="line" name="bayar" value=""/></td>
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
            <td><input type="text" class="line" name="total" value="Rp"/></td>
            <td><input type="text" class="line" name="persen" value=" "/></td>
            <td><input type="text" class="line" name="bayar" value=""/></td>
        </tr>
         <tr>
            <td><?php echo '7.' ;?></td>
            <td><?php echo 'Sektor' ;?></td>
            <td><input type="text" class="line" name="total" value="Rp"/></td>
            <td><input type="text" class="line" name="persen" value=" "/></td>
            <td><input type="text" class="line" name="bayar" value=""/></td>
        </tr>
        <tr>
            <td style="border-top: 1px #444 solid" colspan="2"><?php echo 'J U M L A H' ;?></td>
            <td style="background: #ddd; float: right;" colspan="2"><input type="text" class="line" name="total" value="Rp 31.951.202"/></td>
            <td><input type="text" class="line" name="bayar" value="Rp 79.878"/></td>
            
        </tr>
        <tr>
            <td colspan="5"><label><?php echo 'Terbilang :' ;?></label><input type="text" class="bilangan" value="Tujuh Puluh Sembilan Ribu Delapan Ratus Tujuh Puluh Delapan Rupiah"/></td>
        </tr>
    </tbody>
</table>
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
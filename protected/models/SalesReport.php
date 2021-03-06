<?php

/**
 * This is the model class for table "{{sales_report}}".
 *
 * The followings are the available columns in table '{{sales_report}}':
 * @property integer $id
 * @property string $id_SO
 * @property string $id_DO
 * @property string $id_invoice
 * @property string $posting_date
 * @property string $due_date
 * @property string $customer
 * @property integer $quantity
 * @property string $uom
 * @property string $teritory
 * @property string $sales_term
 * @property double $total
 * @property integer $status
 * @property string $create_at
 */
class SalesReport extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return SalesReport the static model class
	 */
        public $customer ;
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{sales_report}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_SO, id_DO, id_invoice, posting_date, due_date, customer, quantity, uom, teritory, sales_term, total, create_at', 'required'),
			array('quantity, status', 'numerical', 'integerOnly'=>true),
			array('total', 'numerical'),
                        array('no_faktur','safe'),
			array('id_SO, id_DO, id_invoice, uom', 'length', 'max'=>10),
			array('customer, sales_term', 'length', 'max'=>50),
			array('teritory', 'length', 'max'=>20),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, no_faktur, id_SO, id_DO, id_invoice, posting_date, due_date, customer, quantity, uom, teritory, sales_term, total, status, create_at', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
                //$static = "Pursida Siantar 1";
		return array(                   
                    'erp_customer'=>array(self::BELONGS_TO, 'Customer', '', 'on'=> 'erp_customer="'.$this->customer.'"'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
                        'no_faktur' => 'No Faktur',
			'id_SO' => 'SO',
			'id_DO' => 'DN',
			'id_invoice' => 'Invoice',
			'posting_date' => 'Posting Date',
			'due_date' => 'Due Date',
			'customer' => 'Customer',
			'quantity' => 'Qty',
			'uom' => 'UOM',
			'teritory' => 'Teritory',
			'sales_term' => 'Sales Term',
			'total' => 'Total',
			'status' => 'Status',
			'create_at' => 'Create At',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
                $criteria->compare('no_faktur',$this->no_faktur,true);
		$criteria->compare('id_SO',$this->id_SO,true);
		$criteria->compare('id_DO',$this->id_DO,true);
		$criteria->compare('id_invoice',$this->id_invoice,true);
		$criteria->compare('posting_date',$this->posting_date,true);
		$criteria->compare('due_date',$this->due_date,true);
		$criteria->compare('customer',$this->customer,true);
		$criteria->compare('quantity',$this->quantity);
		$criteria->compare('uom',$this->uom,true);
		$criteria->compare('teritory',$this->teritory,true);
		$criteria->compare('sales_term',$this->sales_term,true);
		$criteria->compare('total',$this->total);
		$criteria->compare('status',$this->status);
		$criteria->compare('create_at',$this->create_at,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			'pagination' => array(
				'pageSize' => 20,
			),
		));
	}
        
}

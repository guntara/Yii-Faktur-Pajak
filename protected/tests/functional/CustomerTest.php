<?php

class CustomerTest extends WebTestCase
{
	public $fixtures=array(
		'customers'=>'Customer',
	);

	public function testShow()
	{
		$this->open('?r=customer/view&id=1');
	}

	public function testCreate()
	{
		$this->open('?r=customer/create');
	}

	public function testUpdate()
	{
		$this->open('?r=customer/update&id=1');
	}

	public function testDelete()
	{
		$this->open('?r=customer/view&id=1');
	}

	public function testList()
	{
		$this->open('?r=customer/index');
	}

	public function testAdmin()
	{
		$this->open('?r=customer/admin');
	}
}

<?php

namespace SnapyCloud\PhpApi\Entities;

use SnapyCloud\PhpApi\Entity;
use SnapyCloud\PhpApi\Client\SnapyClient;

class Account extends SnapyClient implements Entity
{
	public $entity = 'Account';

	public function get($data = null):Array
	{
		return $this->request('GET', $this->entity ,$data);
	}
	public function create($data): Array
	{
		return $this->request('POST', $this->entity ,$data);	
	}

	public function update($data, $where): Array
	{
		# code...
	}

	public function remove($where): Boolane
	{

	}
	public function unlined($id, $from): Boolane
	{

	}
	public function linked($id, $to): Boolane
	{

	}
}
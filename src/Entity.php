<?php
namespace SnapyCloud\PhpApi;

interface Entity
{
	public function get($data = null);
	public function create($data);
	public function update($data, $where);
	public function remove($where);
	public function unlined($id, $from);
	public function linked($id, $to);
}
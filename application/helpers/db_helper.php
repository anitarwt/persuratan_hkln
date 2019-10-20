<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class db_helper
{
	public function defaultColumn($method = 'insert', $fields = array())
	{
		$current = new DateTime();
		if ($method == 'insert') {
			$fields = array_merge($fields, array(
				'created_at' => strtotime($current->getTimestamp()),
			));
		} else {
			$fields = array_merge($fields, array(
				'updated_at' => strtotime($current->getTimestamp()),
			));
		}
		return $fields;
	}
}

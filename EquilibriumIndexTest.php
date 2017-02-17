<?php

require_once("./EquilibriumIndex.php");

class EquilibriumIndex extends PHPUnit_Framework_TestCase
{
	public function testCase()
	{
		$arr = array(-7, 1, 5, 2, -4, 3, 0);
		$this->assertEquals(array(3,6), getEquilibriums($arr));

		// additional assertions
		$arr = [1,1,1,1,1,1,1];
		// all numbers are the same, so it should output the index of the middle-most element
		$this->assertEquals(array(3), getEquilibriums($arr));

		$arr = [3,5,1];
		// should get empty array
		$this->assertEquals([], getEquilibriums($arr));

	}
}

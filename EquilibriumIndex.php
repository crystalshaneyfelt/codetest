<?php
/**
 * Get equilibrium indices of a given array
 *
 * Loops through array and determines if, for the index, the sum of the values to the left
 * is equal to sum of the values on the right, and adds the index to the output if they are.
 *
 * @param $arr array An array of numbers
 * @return array equilibrium indices
 */
function getEquilibriums($arr)
{
	// Output begins as empty array
	$output = array();
	// Initially, all values are to the right of the index
	$rightSum = array_sum($arr);
	// Initially, no values are to the left of the index
	$leftSum = 0;
	// Loop through array
	foreach ($arr as $index => $value) {
		// As you step into an index, the sum of the values to the right of the index
		// decreases by the value at the index
		$rightSum -= $value;
		// If the sum of the right and left are equal, the index is an equilibrium index
		if ($leftSum === $rightSum) {
			// Add the equilibrium index to the output array
			$output[] = $index;
		}
		// As you step off an index, the sum of the values to the left of the index
		// increases by the value at the index
		$leftSum += $value;
	}
	return $output;
}

/**
 * Less efficient way to get equilibrium indices
 *
 * This is the first way that came to mind, but it's horribly inefficient,
 * since it has to take the sum the array many times
 *
 * @param $arr array An array of numbers
 * @return array equilibrium indices
 */
function easyWay($arr)
{
	$output = [];
	for ($i = 0; $i < count($arr); $i++) {
		if (array_sum(array_slice($arr, 0, $i)) === array_sum(array_slice($arr, $i + 1))) {
			$returnArr[] = $i;
		}
	}
	return $output;
}

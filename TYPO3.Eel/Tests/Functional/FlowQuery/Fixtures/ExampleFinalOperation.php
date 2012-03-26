<?php
namespace TYPO3\Eel\Tests\Functional\FlowQuery\Fixtures;

/*                                                                        *
 * This script belongs to the FLOW3 package "TYPO3.Eel".                  *
 *                                                                        *
 * It is free software; you can redistribute it and/or modify it under    *
 * the terms of the GNU Lesser General Public License, either version 3   *
 *  of the License, or (at your option) any later version.                *
 *                                                                        *
 * The TYPO3 project - inspiring people to share!                         *
 *                                                                        */

use TYPO3\FLOW3\Annotations as FLOW3;

class ExampleFinalOperation extends \TYPO3\Eel\FlowQuery\Operations\AbstractOperation {

	static protected $shortName = 'exampleFinalOperation';
	static protected $final = TRUE;

	static protected $priority = 1;

	public function evaluate(\TYPO3\Eel\FlowQuery\FlowQuery $query, array $arguments) {
		return 'Priority 1';
	}
}

?>
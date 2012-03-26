<?php
namespace TYPO3\Eel\FlowQuery\Operations;

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

/**
 * Get the first element inside the context
 */
class FirstOperation extends AbstractOperation {

	static protected $shortName = 'first';

	public function evaluate(\TYPO3\Eel\FlowQuery\FlowQuery $flowQuery, array $arguments) {
		$context = $flowQuery->getContext();
		if (isset($context[0])) {
			$flowQuery->setContext(array($context[0]));
		} else {
			$flowQuery->setContext(array());
		}
	}
}

?>
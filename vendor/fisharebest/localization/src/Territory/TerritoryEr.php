<?php namespace Fisharebest\Localization;

/**
 * Class Territory - Representation of the territory ER - Eritrea.
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class TerritoryEr extends Territory {
	/** {@inheritdoc} */
	public function code() {
		return 'ER';
	}

	/** {@inheritdoc} */
	public function firstDay() {
		return 6;
	}
}

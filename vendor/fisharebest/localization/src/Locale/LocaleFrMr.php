<?php namespace Fisharebest\Localization;

/**
 * Class LocaleFrMr
 *
 * @author        Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license       GPLv3+
 */
class LocaleFrMr extends LocaleFr {
	/** {@inheritdoc} */
	public function territory() {
		return new TerritoryMr;
	}
}

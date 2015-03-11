<?php namespace Fisharebest\Localization;

/**
 * Class LocaleEnIe
 *
 * @author        Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license       GPLv3+
 */
class LocaleEnIe extends LocaleEn {
	/** {@inheritdoc} */
	public function territory() {
		return new TerritoryIe;
	}
}

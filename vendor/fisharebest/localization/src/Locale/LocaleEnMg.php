<?php namespace Fisharebest\Localization;

/**
 * Class LocaleEnMg
 *
 * @author        Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license       GPLv3+
 */
class LocaleEnMg extends LocaleEn {
	/** {@inheritdoc} */
	public function territory() {
		return new TerritoryMg;
	}
}

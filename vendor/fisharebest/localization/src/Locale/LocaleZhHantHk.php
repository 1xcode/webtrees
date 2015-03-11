<?php namespace Fisharebest\Localization;

/**
 * Class LocaleZhHantHk
 *
 * @author        Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license       GPLv3+
 */
class LocaleZhHantHk extends LocaleZhHant {
	/** {@inheritdoc} */
	public function territory() {
		return new TerritoryHk;
	}
}

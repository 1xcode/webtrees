<?php namespace Fisharebest\Localization;

/**
 * Class LocaleTrCy
 *
 * @author        Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license       GPLv3+
 */
class LocaleTrCy extends LocaleTr {
	/** {@inheritdoc} */
	public function territory() {
		return new TerritoryCy;
	}
}

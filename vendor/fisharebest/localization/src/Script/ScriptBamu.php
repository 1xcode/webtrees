<?php namespace Fisharebest\Localization;

/**
 * Class ScriptBamu - Representation of the Bamum script.
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class ScriptBamu extends Script {
	/** {@inheritdoc} */
	public function code() {
		return 'Bamu';
	}

	/** {@inheritdoc} */
	public function number() {
		return '435';
	}

	/** {@inheritdoc} */
	public function unicodeName() {
		return 'Bamum';
	}
}

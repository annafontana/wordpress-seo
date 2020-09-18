<?php

namespace Yoast\WP\SEO\Conditionals;

/**
 * Conditional that is only met when in development mode.
 */
class Development_Conditional implements Conditional {

	/**
	 * Returns whether or not this conditional is met.
	 *
	 * @return boolean Whether or not the conditional is met.
	 */
	public function is_met() {
		return YoastSEO()->helpers->yoast->is_development_mode();
	}
}

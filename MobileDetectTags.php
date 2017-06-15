<?php

namespace Statamic\Addons\MobileDetect;

use Statamic\Extend\Tags;

/**
 * Statamic 2 Addon
 */

class MobileDetectTags extends Tags
{
	private $detect;

	public function init()
	{
		$this->detect = new \Mobile_Detect;
	}

	/**
	 * The {{ mobile_detect }} tag
	 *
	 * @return string
	 */
	public function index()
	{
		$device = 'computer';

		if( $this->detect->isMobile() ) {
			$device = $this->detect->isTablet() ? 'tablet' : 'phone';

			if( $this->detect->isiOS() ) {
				$device .= ' ios';
			}

			if( $this->detect->isAndroidOS() ) {
				$device .= ' android';
			}
		}

		return $device;
	}

	/**
	 * The {{ mobile_detect:version }} tag
	 *
	 * @return string
	 */
	public function libraryVersion()
	{
		return $this->detect->getScriptVersion();
	}
}

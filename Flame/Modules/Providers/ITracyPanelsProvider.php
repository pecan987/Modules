<?php
/**
 * Class ITracyPanelsProvider
 *
 * @author: Jiří Šifalda <sifalda.jiri@gmail.com>
 * @date: 10.09.13
 */

namespace Flame\Modules\Providers;

interface ITracyPanelsProvider
{

	/**
	 * Returns array of panel renderer callbacks
	 *
	 * @see http://doc.nette.org/en/2.1/configuring#toc-debugger
	 * @return array
	 */
	function getTracyPanels();
}
<?php

namespace Flame\Tests\Modules\Providers;

use Flame\Tester\TestCase;
use Tester\Assert;

require_once __DIR__ . '/../../bootstrap.php';

/**
 * @author Ondřej Záruba
 */
class TemplateHelpersProviderTest extends TestCase
{
	public function testTemplateHelper()
	{
		/** @var \Latte\Engine $engine */
		$engine = $this->getContext()->getByType('Nette\Bridges\Framework\ILatteFactory')->create();
		$helpers = $engine->getFilters();
		Assert::true(array_key_exists('flamehelper', $helpers));
		Assert::type('TestHelper', $helpers['flamehelper'][0]);
		Assert::same('process', $helpers['flamehelper'][1]);
		Assert::true(array_key_exists('flamehelper2', $helpers));
		Assert::type('TestHelper', $helpers['flamehelper2'][0]);
		Assert::same('process', $helpers['flamehelper2'][1]);
		Assert::true(array_key_exists('flamehelpertype2', $helpers));
		Assert::type('TestHelper2', $helpers['flamehelpertype2'][0]);
		Assert::same('process', $helpers['flamehelpertype2'][1]);
	}
}

\run(new TemplateHelpersProviderTest(getContainer()));
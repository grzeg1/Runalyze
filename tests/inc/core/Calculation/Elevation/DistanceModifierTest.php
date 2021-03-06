<?php

namespace Runalyze\Calculation\Elevation;

/**
 * Generated by PHPUnit_SkeletonGenerator 1.2.0 on 2014-11-29 at 13:31:05.
 */
class DistanceModifierTest extends \PHPUnit_Framework_TestCase {

	public function testSimpleModification() {
		$Modifier = new DistanceModifier(10, 200, 100);
		$Modifier->setCorrectionValues(+2, -1);

		$this->assertEquals(0.3, $Modifier->additionalDistance());
		$this->assertEquals(10.3, $Modifier->correctedDistance());
	}

	public function testNoModification() {
		$Modifier = new DistanceModifier(10);

		$this->assertEquals(0.0, $Modifier->additionalDistance());
		$this->assertEquals(10.0, $Modifier->correctedDistance());
	}

	public function testNegativeModification() {
		$Modifier = new DistanceModifier(10, 200, 500);
		$Modifier->setCorrectionValues(+2, -1);

		$this->assertEquals(-0.1, $Modifier->additionalDistance());
		$this->assertEquals(9.9, $Modifier->correctedDistance());
	}

	public function testConfigurationSettings() {
		$VDOTconfig = new \Runalyze\Configuration\Category\Vdot();
		$Modifier = new DistanceModifier(10, 100, 100, $VDOTconfig);

		$addition = 0.1*$VDOTconfig->correctionForPositiveElevation() + 0.1*$VDOTconfig->correctionForNegativeElevation();

		$this->assertEquals($addition, $Modifier->additionalDistance());
		$this->assertEquals(10+$addition, $Modifier->correctedDistance());
	}

}

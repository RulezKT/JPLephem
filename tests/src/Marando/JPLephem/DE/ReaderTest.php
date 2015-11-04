<?php

namespace Marando\JPLephem\DE;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2015-11-04 at 00:39:45.
 */
class ReaderTest extends \PHPUnit_Framework_TestCase {

  public function testPositionSolarBary() {
    $de  = new Reader();
    $ssb = $de->position(SSObj::SolarBary());

    $this->assertEquals([0, 0, 0, 0, 0, 0], $ssb);

    


    //$ssb = $de->position(SSObj::Moon());

    $ssb = $de->position(SSObj::Mars(), SSObj::Earth());
    var_dump($ssb);

    $ssb = $de->position(SSObj::Mars(), SSObj::Pluto());
    var_dump($ssb);

    $ssb = $de->jde(2451585)->position(SSObj::Mars(), SSObj::Pluto());
    var_dump($ssb);
  }

  ///////
  //////////////
  ///////
  /////////////////////
  ///////

  /**
   * @covers Marando\JPLephem\DE\Reader::jde
   * @todo   Implement testJde().
   */
  public function testJde() {
    // Remove the following lines when you implement this test.
    $this->markTestIncomplete(
            'This test has not been implemented yet.'
    );
  }

  /**
   * @covers Marando\JPLephem\DE\Reader::position
   * @todo   Implement testPosition().
   */
  public function testPosition() {
    // Remove the following lines when you implement this test.
    $this->markTestIncomplete(
            'This test has not been implemented yet.'
    );
  }

  /**
   * @covers Marando\JPLephem\DE\Reader::observe
   * @todo   Implement testObserve().
   */
  public function testObserve() {
    // Remove the following lines when you implement this test.
    $this->markTestIncomplete(
            'This test has not been implemented yet.'
    );
  }

  /**
   * @covers Marando\JPLephem\DE\Reader::interp
   * @todo   Implement testInterp().
   */
  public function testInterp() {
    // Remove the following lines when you implement this test.
    $this->markTestIncomplete(
            'This test has not been implemented yet.'
    );
  }

  /**
   * @covers Marando\JPLephem\DE\Reader::__get
   * @todo   Implement test__get().
   */
  public function test__get() {
    // Remove the following lines when you implement this test.
    $this->markTestIncomplete(
            'This test has not been implemented yet.'
    );
  }

}

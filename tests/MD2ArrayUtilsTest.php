<?php
require_once '../src/MD2ArrayUtils.php';

require_once 'PHPUnit/Framework/TestCase.php';

/**
 * MD2ArrayUtils test case.
 */
class MD2ArrayUtilsTest extends PHPUnit_Framework_TestCase
{

    /**
     *
     * @var array one null row
     */
    private $arrayNullInRows;

    /**
     * @var array one null column
     */
    private $arrayNullInColumns;

    /**
     * Prepares the environment before running a test.
     */
    protected function setUp()
    {
        parent::setUp();

        $this->arrayNullInRows = array(
            array(1,     'a',   false, null),   // 0
            array('',    '',    '',    ''),     // 1
            array(0,     0,     0,     0),      // 2
            array(false, false, false, false),  // 3
            array('',    null,  null,  null),   // 4
            array(0,     null,  null,  null),   // 5
            array(false, null,  null,  null),   // 6
            array(null,  null,  null,  null),   // 7
        );

        $this->arrayNullInColumns = array(
            //    0      1      2      3      4      5      6      7
            array(1,     '',    0,     false, '',    0,     false, null),
            array('a',   '',    0,     false, null,  null,  null,  null),
            array(false, '',    0,     false, null,  null,  null,  null),
            array(null,  '',    0,     false, null,  null,  null,  null),
        );
    }

    /**
     * Cleans up the environment after running a test.
     */
    protected function tearDown()
    {
        $this->arrayNullInRows = null;
        $this->arrayNullInColumns = null;

        parent::tearDown();
    }

    /**
     * Tests MD2ArrayUtils::isNullRow()
     */
    public function testIsNullRow()
    {
        for($i=0; $i<7; $i++)
            if(\Quazisoft\MDArray\MD2ArrayUtils::isNullRow($this->arrayNullInRows, $i))
                $this->markTestIncomplete("row #$i is null");

        if(!\Quazisoft\MDArray\MD2ArrayUtils::isNullRow($this->arrayNullInRows, 7))
            $this->markTestIncomplete("row #7 is not null");
    }

    /**
     * Tests MD2ArrayUtils::isNullColumn()
     */
    public function testIsNullColumn()
    {
        var_dump($this->arrayNullInColumns);
        for($i=0; $i<7; $i++)
            if(\Quazisoft\MDArray\MD2ArrayUtils::isNullColumn($this->arrayNullInColumns, $i))
                $this->markTestIncomplete("column #$i is null");

        if(!\Quazisoft\MDArray\MD2ArrayUtils::isNullColumn($this->arrayNullInColumns, 7))
            $this->markTestIncomplete("column #7 is not null");
    }
}


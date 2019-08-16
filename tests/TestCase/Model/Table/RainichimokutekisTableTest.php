<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RainichimokutekisTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RainichimokutekisTable Test Case
 */
class RainichimokutekisTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\RainichimokutekisTable
     */
    public $Rainichimokutekis;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.rainichimokutekis'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Rainichimokutekis') ? [] : ['className' => RainichimokutekisTable::class];
        $this->Rainichimokutekis = TableRegistry::get('Rainichimokutekis', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Rainichimokutekis);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}

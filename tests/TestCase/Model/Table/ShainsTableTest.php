<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ShainsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ShainsTable Test Case
 */
class ShainsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ShainsTable
     */
    public $Shains;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.shains',
        'app.departments'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Shains') ? [] : ['className' => ShainsTable::class];
        $this->Shains = TableRegistry::get('Shains', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Shains);

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

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}

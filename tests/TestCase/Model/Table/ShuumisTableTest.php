<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ShuumisTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ShuumisTable Test Case
 */
class ShuumisTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ShuumisTable
     */
    public $Shuumis;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.shuumis'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Shuumis') ? [] : ['className' => ShuumisTable::class];
        $this->Shuumis = TableRegistry::get('Shuumis', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Shuumis);

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

<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ShokugyousTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ShokugyousTable Test Case
 */
class ShokugyousTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ShokugyousTable
     */
    public $Shokugyous;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.shokugyous'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Shokugyous') ? [] : ['className' => ShokugyousTable::class];
        $this->Shokugyous = TableRegistry::get('Shokugyous', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Shokugyous);

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

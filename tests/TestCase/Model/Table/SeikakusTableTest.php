<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SeikakusTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SeikakusTable Test Case
 */
class SeikakusTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\SeikakusTable
     */
    public $Seikakus;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.seikakus'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Seikakus') ? [] : ['className' => SeikakusTable::class];
        $this->Seikakus = TableRegistry::get('Seikakus', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Seikakus);

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

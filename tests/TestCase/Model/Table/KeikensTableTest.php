<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\KeikensTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\KeikensTable Test Case
 */
class KeikensTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\KeikensTable
     */
    public $Keikens;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.keikens',
        'app.members',
        'app.companys',
        'app.associations'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Keikens') ? [] : ['className' => KeikensTable::class];
        $this->Keikens = TableRegistry::get('Keikens', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Keikens);

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

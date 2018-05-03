<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BenkyosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BenkyosTable Test Case
 */
class BenkyosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\BenkyosTable
     */
    public $Benkyos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.benkyos',
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
        $config = TableRegistry::exists('Benkyos') ? [] : ['className' => BenkyosTable::class];
        $this->Benkyos = TableRegistry::get('Benkyos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Benkyos);

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

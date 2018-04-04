<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RecruitmentsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RecruitmentsTable Test Case
 */
class RecruitmentsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\RecruitmentsTable
     */
    public $Recruitments;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.recruitments',
        'app.users'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Recruitments') ? [] : ['className' => RecruitmentsTable::class];
        $this->Recruitments = TableRegistry::get('Recruitments', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Recruitments);

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

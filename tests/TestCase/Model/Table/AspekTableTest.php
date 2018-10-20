<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AspekTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AspekTable Test Case
 */
class AspekTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AspekTable
     */
    public $Aspek;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.aspek'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Aspek') ? [] : ['className' => AspekTable::class];
        $this->Aspek = TableRegistry::getTableLocator()->get('Aspek', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Aspek);

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

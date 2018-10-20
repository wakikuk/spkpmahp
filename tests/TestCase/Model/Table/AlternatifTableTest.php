<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AlternatifTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AlternatifTable Test Case
 */
class AlternatifTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AlternatifTable
     */
    public $Alternatif;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.alternatif'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Alternatif') ? [] : ['className' => AlternatifTable::class];
        $this->Alternatif = TableRegistry::getTableLocator()->get('Alternatif', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Alternatif);

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

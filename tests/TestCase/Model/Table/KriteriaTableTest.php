<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\KriteriaTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\KriteriaTable Test Case
 */
class KriteriaTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\KriteriaTable
     */
    public $Kriteria;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.kriteria'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Kriteria') ? [] : ['className' => KriteriaTable::class];
        $this->Kriteria = TableRegistry::getTableLocator()->get('Kriteria', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Kriteria);

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

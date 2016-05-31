<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\OfficeTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\OfficeTable Test Case
 */
class OfficeTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\OfficeTable
     */
    public $Office;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.office',
        'app.display_statuses',
        'app.contact_office_jn'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Office') ? [] : ['className' => 'App\Model\Table\OfficeTable'];
        $this->Office = TableRegistry::get('Office', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Office);

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

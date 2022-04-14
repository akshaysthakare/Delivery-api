<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\OrderTypesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\OrderTypesTable Test Case
 */
class OrderTypesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\OrderTypesTable
     */
    protected $OrderTypes;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.OrderTypes',
        'app.Orders',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('OrderTypes') ? [] : ['className' => OrderTypesTable::class];
        $this->OrderTypes = $this->getTableLocator()->get('OrderTypes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->OrderTypes);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}

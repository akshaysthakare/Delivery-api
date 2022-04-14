<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\OrdersTypesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\OrdersTypesTable Test Case
 */
class OrdersTypesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\OrdersTypesTable
     */
    protected $OrdersTypes;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.OrdersTypes',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('OrdersTypes') ? [] : ['className' => OrdersTypesTable::class];
        $this->OrdersTypes = $this->getTableLocator()->get('OrdersTypes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->OrdersTypes);

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

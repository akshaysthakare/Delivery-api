<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\OrdersTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\OrdersTable Test Case
 */
class OrdersTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\OrdersTable
     */
    protected $Orders;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Orders',
        'app.PickupAddresses',
        'app.DropoffAddresses',
        'app.Customers',
        'app.DeliveryBoys',
        'app.OrderTypes',
        'app.Vendors',
        'app.OrderStatuses',
        'app.Images',
        'app.Thumbnails',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Orders') ? [] : ['className' => OrdersTable::class];
        $this->Orders = $this->getTableLocator()->get('Orders', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Orders);

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

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}

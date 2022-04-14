<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\OrderStatusesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\OrderStatusesTable Test Case
 */
class OrderStatusesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\OrderStatusesTable
     */
    protected $OrderStatuses;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.OrderStatuses',
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
        $config = $this->getTableLocator()->exists('OrderStatuses') ? [] : ['className' => OrderStatusesTable::class];
        $this->OrderStatuses = $this->getTableLocator()->get('OrderStatuses', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->OrderStatuses);

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

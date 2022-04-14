<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ImagesOrdersTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ImagesOrdersTable Test Case
 */
class ImagesOrdersTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ImagesOrdersTable
     */
    protected $ImagesOrders;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.ImagesOrders',
        'app.Images',
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
        $config = $this->getTableLocator()->exists('ImagesOrders') ? [] : ['className' => ImagesOrdersTable::class];
        $this->ImagesOrders = $this->getTableLocator()->get('ImagesOrders', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->ImagesOrders);

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

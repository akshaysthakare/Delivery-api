<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UserStatusesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UserStatusesTable Test Case
 */
class UserStatusesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\UserStatusesTable
     */
    protected $UserStatuses;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.UserStatuses',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('UserStatuses') ? [] : ['className' => UserStatusesTable::class];
        $this->UserStatuses = $this->getTableLocator()->get('UserStatuses', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->UserStatuses);

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

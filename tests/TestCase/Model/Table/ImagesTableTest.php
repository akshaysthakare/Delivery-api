<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ImagesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ImagesTable Test Case
 */
class ImagesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ImagesTable
     */
    protected $Images;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Images',
        'app.Thumbnails',
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
        $config = $this->getTableLocator()->exists('Images') ? [] : ['className' => ImagesTable::class];
        $this->Images = $this->getTableLocator()->get('Images', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Images);

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

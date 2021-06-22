<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BookmarkTagsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BookmarkTagsTable Test Case
 */
class BookmarkTagsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\BookmarkTagsTable
     */
    protected $BookmarkTags;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.BookmarkTags',
        'app.Bookmarks',
        'app.Tags',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('BookmarkTags') ? [] : ['className' => BookmarkTagsTable::class];
        $this->BookmarkTags = $this->getTableLocator()->get('BookmarkTags', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->BookmarkTags);

        parent::tearDown();
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

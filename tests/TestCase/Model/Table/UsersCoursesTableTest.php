<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UsersCoursesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UsersCoursesTable Test Case
 */
class UsersCoursesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\UsersCoursesTable
     */
    protected $UsersCourses;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.UsersCourses',
        'app.Users',
        'app.Courses',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('UsersCourses') ? [] : ['className' => UsersCoursesTable::class];
        $this->UsersCourses = $this->getTableLocator()->get('UsersCourses', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->UsersCourses);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\UsersCoursesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\UsersCoursesTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}

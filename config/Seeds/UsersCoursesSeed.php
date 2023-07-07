<?php
declare(strict_types=1);

use Migrations\AbstractSeed;

/**
 * UsersCourses seed.
 */
class UsersCoursesSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * https://book.cakephp.org/phinx/0/en/seeding.html
     *
     * @return void
     */
    public function run(): void
    {
        $data[] = [
            'user_id'      => 1,
            'course_id'      => 1,                      
        ];

        $table = $this->table('users_courses');
        $table->insert($data)->save();
    }
}

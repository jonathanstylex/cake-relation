<?php
declare(strict_types=1);

use Migrations\AbstractSeed;

/**
 * Courses seed.
 */
class CoursesSeed extends AbstractSeed
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
            'name'      => 'Codeigniter 4',
            'price_id'      => 1,                      
        ];


        $table = $this->table('courses');
        $table->insert($data)->save();
    }
}

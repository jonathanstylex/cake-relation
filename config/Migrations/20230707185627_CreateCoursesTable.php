<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class CreateCoursesTable extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function change(): void
    {
        $users = $this->table('courses');    
        $users->addColumn('name', 'string', ['limit' => 30])       
       ->addColumn('price_id', 'integer')       
       ->create();
    }
}

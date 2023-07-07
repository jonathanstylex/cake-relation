<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class CreateUsersTable extends AbstractMigration
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

       $users = $this->table('users');
       // $users->addColumn('username', 'string', ['limit' => 20])
       ->addColumn('img', 'string', ['limit' => 30])
       ->addColumn('email', 'string', ['limit' => 100])
       ->addColumn('password', 'string', ['limit' => 100])
       ->addColumn('password_salt', 'string', ['limit' => 100])
       ->addColumn('token', 'string', ['limit' => 100])
       ->addColumn('role_id', 'integer')
       ->addColumn('statu_id', 'integer')
       ->addColumn('is_buyer', 'integer')

       // ->addColumn('email', 'string', ['limit' => 100])
       // ->addColumn('first_name', 'string', ['limit' => 30])
       // ->addColumn('last_name', 'string', ['limit' => 30])
       // ->addColumn('role', 'integer')
       // ->addColumn('created', 'datetime')
       // ->addColumn('updated', 'datetime', ['null' => true])
       // ->addIndex(['username', 'email'], ['unique' => true])
       ->addIndex( 'email', ['unique' => true])
       ->create();
   }
}

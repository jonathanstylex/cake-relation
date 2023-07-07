<?php
declare(strict_types=1);

use Migrations\AbstractSeed;

use Authentication\PasswordHasher\DefaultPasswordHasher;

/**
 * Users seed.
 */
class UsersSeed extends AbstractSeed
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
        $hasher = new DefaultPasswordHasher();       

        $data[] = [
            'img'      => 'user.png',
            'email'         => 'contact@opengiscrm.com',                
            'password'      => $hasher->hash('123'),
            'password_salt' => $hasher->hash('123'),
            'token'         => '$2y$10$FL6jBHxODfnQ2sN6T0trqORYLy8GYTuTQCTgLGYxS9Nu8u63Oa.ji',
            'role_id'          => 1,
            'statu_id'          => 1,
            'is_buyer'          => 1,            
        ];

        $table = $this->table('users');
        $table->insert($data)->save();
    }
}

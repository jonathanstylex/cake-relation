<?php
declare(strict_types=1);

use Migrations\AbstractSeed;

/**
 * Prices seed.
 */
class PricesSeed extends AbstractSeed
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
            'price'      => '10',                     
        ];


        $table = $this->table('prices');
        $table->insert($data)->save();
    }
}

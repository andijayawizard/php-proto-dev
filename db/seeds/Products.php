<?php

declare(strict_types=1);

use Phinx\Seed\AbstractSeed;

class Products extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * https://book.cakephp.org/phinx/0/en/seeding.html
     */
    public function run(): void
    {
        $data = array(
            array('nama'=>'membran bakar morillo'),
            array('nama'=>'koster pelapis anti bocor'),
        );
        $products=$this->table('products');
        $products->insert($data)->save();
    }
}

<?php

declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class Products extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function change(): void
    {
        $products=$this->table('products');
        $products->addColumn('brand_id', 'integer', ['signed'=>false])
            ->addColumn('nama', 'string')
            ->addColumn('slug', 'string')
            ->addColumn('rgks', 'text')
            ->addColumn('ktrg', 'text')
            ->addColumn('acak', 'string', ['limit'=>50])
            ->addColumn('pub', 'boolean')
            ->addTimestampsWithTimezone()
            ->addIndex('nama', ['unique'=>true])
            ->addForeignKey('brand_id', 'brands', 'id', ['update'=>'NO_ACTION', 'delete'=>'NO_ACTION'])
            ->create();

    }
}

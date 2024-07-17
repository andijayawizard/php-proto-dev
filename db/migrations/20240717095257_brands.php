<?php

declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class Brands extends AbstractMigration
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
        $brands=$this->table('brands');
        $brands->addColumn('nama', 'string', ['limit'=>100])
            ->addColumn('slug', 'string', ['limit'=>100])
            ->addColumn('rgks', 'text')
            ->addColumn('ktrg', 'text')
            ->addColumn('acak', 'string', ['limit'=>100])
            ->addColumn('pub', 'integer')
            ->addTimestampsWithTimezone()
            ->addIndex(['nama'], ['unique'=>true])
            ->create();
    }
}

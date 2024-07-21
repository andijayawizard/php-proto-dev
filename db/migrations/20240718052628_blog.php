<?php

declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class Blog extends AbstractMigration
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
        $blog=$this->table('blogs');
        $blog->addColumn('user_id', 'integer', ['null'=>true, 'signed'=>false])
            ->addColumn('nama', 'string', ['limit'=>100])
            ->addColumn('slug', 'string')
            ->addColumn('rgks', 'text')
            ->addColumn('ktrg', 'text')
            ->addColumn('acak', 'string', ['limit'=>100])
            ->addColumn('pub', 'integer')
            ->addTimestampsWithTimezone()
            ->addIndex(['nama'], ['unique'=>true])
            ->addForeignKey('user_id', 'users', 'id', ['update'=>'NO_ACTION', 'delete'=>'NO_ACTION'])
            ->create();
    }
}

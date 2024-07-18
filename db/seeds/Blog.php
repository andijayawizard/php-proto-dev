<?php

declare(strict_types=1);

use Phinx\Seed\AbstractSeed;

class Blog extends AbstractSeed
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
            array(
                'nama'=>'judul',
                'rgks'=>'ringkasan',
                'ktrg'=>'keterangan'
            ),
            array(
                'nama'=>'title',
                'rgks'=>'summary',
                'ktrg'=>'details'
            ),
        );
        $blog=$this->table('blogs');
        $blog->insert($data)->save();
    }
}

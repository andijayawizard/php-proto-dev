<?php

declare(strict_types=1);

use Phinx\Seed\AbstractSeed;

class Users extends AbstractSeed
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
                'username'=>'admin',
                'password'=>password_hash('password', PASSWORD_DEFAULT),
                'api_key'=>bin2hex(random_bytes(8)),
            ),
            array(
                'username'=>'andika',
                'password'=>password_hash('password', PASSWORD_DEFAULT),
                'api_key'=>bin2hex(random_bytes(8)),
            ),
        );
        $user=$this->table('users');
        $user->insert($data)->save();
    }
}

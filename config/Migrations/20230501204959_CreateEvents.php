<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class CreateEvents extends AbstractMigration
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
        $this->table('events')
            ->addColumn('user_id','integer')
            ->addColumn('title','string')
            ->addColumn('description','string')
            ->addColumn('event_date', 'datetime')
            ->addColumn('created', 'datetime')
            ->addColumn('modified', 'datetime')
            ->addColumn('public', 'boolean')
            ->addColumn('published', 'boolean',  ['null' => true])
        ->create();
    }
}

<?php

use Phinx\Migration\AbstractMigration;

class AddColumnsToPosts extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-abstractmigration-class
     */
    public function change()
    {
        $table = $this->table('posts');
        $table->addColumn('progress', 'integer', ['default' => 0])
              ->addColumn('published', 'datetime', ['null' => true])
              ->addColumn('active', 'boolean', ['default' => false])
              ->update();        
    }
}


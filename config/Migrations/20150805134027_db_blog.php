<?php

use Phinx\Migration\AbstractMigration;

class DbBlog extends AbstractMigration
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
        $table->addColumn('title', 'string')
            ->addColumn('slug', 'string')
            ->addColumn('summary', 'text')
            ->addColumn('body', 'text')
            ->addColumn('created', 'datetime')
            ->addColumn('modified', 'datetime', ['null' => true])
            ->addIndex(['slug'], ['unique'=>true])
            ->create();

        $table = $this->table('tags');
        $table->addColumn('title', 'string')
            ->addColumn('slug', 'string')
            ->addColumn('created', 'datetime')
            ->addColumn('modified', 'datetime', ['null' => true])
            ->addIndex(['slug'], ['unique'=>true])
            ->create();

        $table = $this->table('posts_tags');
        $table->addColumn('post_id', 'integer', ['null' => false])
            ->addColumn('tag_id', 'integer', ['null' => false])
            ->addIndex(['post_id', 'tag_id'], ['unique' => true])
            ->create();

        $table = $this->table('users');
        $table->addColumn('username', 'string')
            ->addColumn('password', 'string')
            ->addColumn('created', 'datetime')
            ->addColumn('modified', 'datetime', ['null' => true])
            ->addIndex(['username'], ['unique'=>true])                    
            ->create();
    }

    /**
     *
     */
    public function up()
    {

    }

    /**
     *
     */
    public function down()
    {

    }
}

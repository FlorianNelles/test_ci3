<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Create_Posts extends CI_Migration {
	public function up()
	{
		$this->dbforge->add_field(array(
			'id' => array(
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => TRUE,
				'auto_increment' => TRUE
			),
			'title' => array(
				'type' => 'VARCHAR',
				'constraint' => '255',
			),
			'body' => array(
				'type' => 'TEXT',
			),
			'created_at' => array(
				'type' => 'timestamp',
				'current_timestamp' => true
			)
		));
		$this->dbforge->add_key('id', TRUE);
		$this->dbforge->create_table('posts');

	}

	public function down()
	{
		$this->dbforge->drop_table('posts');
	}
}

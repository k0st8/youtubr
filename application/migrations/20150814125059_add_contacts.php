<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Migration_Add_contacts extends CI_Migration {

        public function up()
        {
                $this->dbforge->add_field(array(
                        'id' => array(
                                'type' => 'INT',
                                'constraint' => 5,
                                'unsigned' => TRUE,
                                'auto_increment' => TRUE
                        ),
                        'name' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '255',
                        ),
                        'email' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                        ),
                        'subject' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '255',
                        ),
                        'body' => array(
                                'type' => 'TEXT',
                                'null' => TRUE,
                        ),
                ));
                $this->dbforge->add_key('id', TRUE);
                $this->dbforge->create_table('contacts');
        }

        public function down()
        {
                $this->dbforge->drop_table('contacts');
        }
}
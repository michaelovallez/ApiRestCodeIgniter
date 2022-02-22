<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class MigrationUsers extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'user_id'          => [
                'type'           => 'INT',
                'constraint'     => 12,
                'unsigned'       => true,
                'auto_increment' => true,
                'null' => false,
            ],
            'name' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => false,
            ],
            'mail'       => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'null' => false,
            ],
            'admin' => [
                'type' => 'BOOLEAN',
                'null' => false,
            ],
            'password' => [
                'type'       => 'VARCHAR',
                'constraint' => '200',
                'null' => false,
            ],
            'created_at' => [
                'type'       => 'DATETIME',
                'null' => false,
            ],
            'updated_at' => [
                'type'       => 'DATETIME',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('user_id', true);
        $this->forge->createTable('users');
    
    }

    public function down()
    {
        $this->forge->dropTable('users');
    }
}

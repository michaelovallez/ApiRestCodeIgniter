<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class MigrationProductos extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'producto_id'          => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nombre' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => false,
            ],
            'imagen' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => false,
            ],
            'precio' => [
                'type' => 'FLOAT',
                'null' => false,
            ],
            'descripcion' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
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
        $this->forge->addKey('producto_id', true);
        $this->forge->createTable('productos');
    
    }

    public function down()
    {
        $this->forge->dropTable('productos');
    }
}

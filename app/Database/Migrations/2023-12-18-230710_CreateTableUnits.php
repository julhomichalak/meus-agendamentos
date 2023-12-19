<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTableUnits extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'unit_id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'name' => [
                'type'           => 'VARCHAR',
                'constraint'     => 70,
            ],
            'email' => [
                'type'           => 'VARCHAR',
                'constraint'     => 100,
            ],
            'phone' => [
                'type'           => 'VARCHAR',
                'constraint'     => 14,
                'comment'        => '(99)99999-9999'
            ],
            'coordinator' => [
                'type'           => 'VARCHAR',
                'constraint'     => 70,
                'comment'        => 'Coordenador'
            ],
            'address' => [
                'type'           => 'VARCHAR',
                'constraint'     => 256
            ],
            'services' => [
                'type'           => 'JSON',
                'null'           => true,
                'default'        => null
            ],
            'start_time' => [
                'type'           => 'VARCHAR',
                'constraint'     => 6,
                'comment'        => 'Horário de abertura da unidade'
            ],
            'end_time' => [
                'type'           => 'VARCHAR',
                'constraint'     => 6,
                'comment'        => 'Horário de fechamento da unidade'
            ],
            'service_time' => [
                'type'           => 'VARCHAR',
                'constraint'     => 20,
                'comment'        => 'Tempo de cada atendimento'
            ],
            'active' => [
                'type'           => 'TINYINT',
                'constraint'     => 1,
                'default'        => 0
            ],
            'created_at' => [
                'type'           => 'DATETIME',
                'default'        => null,
                'null'           => null,
            ],
            'updated_at' => [
                'type'           => 'DATETIME',
                'default'        => null,
                'null'           => null,
            ]

        ]);
        $this->forge->addKey('unit_id', true);
        $this->forge->addKey('name');
        $this->forge->addKey('email');
        $this->forge->addKey('phone');
        $this->forge->createTable('units');
    }

    public function down()
    {
        $this->forge->dropTable('units');
    }
}
